<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\Html\Columns\Index;
use App\Models\Menu;
use App\Models\Skill;
use App\Models\Banner;
use App\Models\Services;
use App\Models\Experience;
use App\Helpers\UploadHelper;
use Carbon\Carbon;
use DB;
use Auth;

class PortfolioController extends Controller
{


  public function __construct()
{
    $this->middleware('auth');
    $this->middleware(function ($request, $next) {
        $this->user = Auth::user();

        return $next($request);
    });
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         if (request()->ajax()) {
            $portfolio = Portfolio::orderBy('id', 'desc')
                        ->select(
                            'id',
                            'project_title',
                            'thumbnail'
                            )
                ->get();

            // dd($portfolio);
            $datatable = Datatables::of($portfolio)
                ->addColumn(
                    'action',
                    function ($row) {
                        $csrf = "" . csrf_field() . "";
                        $html = '<div class="row">
                                    <a class="btn btn-primary btn-xs" style="    margin-right: 11px;" href="' . route('admin.portfolios.edit', $row->id) . '">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>
                                    <a class="btn btn-danger btn-xs" href="#deleteModal' . $row->id . '"
                                    data-toggle="modal"><i class="fa fa-trash"></i> Delete</a> 
                                    </div>
                            <div class="modal fade delete-modal" id=deleteModal' . $row->id . '  tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle" style="color:#E50914">Are you sure to delete ?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p style="color:#E50914"> Please
                                        be sure
                                        first to delete.
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <form action="' . action('Backend\PortfolioController@destroy', [$row->id]) . '" method="post">' . $csrf . '
                                        <button type="submit" class="btn btn-outline-success"><i
                                                class="fa fa-check"></i> Confirm Delete</button>
                                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal"><i
                                                class="fa fa-times"></i> Close</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> ';
                        return $html;
                    }
                );
            $rawColumns = ['action'];
            return $datatable->rawColumns($rawColumns)
        ->make(true);
        }


        return view('backend.portfolios.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus=Menu::orderBy('id','desc')->get();
        return view('backend.portfolios.create',compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'project_title'  => 'required|max:100',
            'menu_id'  => 'required|max:100',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try {
            DB::beginTransaction();
            $portfolio = new Portfolio();
            $portfolio->project_title = $request->project_title;
            $portfolio->menu_id = $request->menu_id;
             if ($request->thumbnail) {
                $portfolio->thumbnail = UploadHelper::upload('thumbnail', $request->thumbnail, $request->project_title . '-' . time(), 'public/backend/images/portfolio');
            }

             if ($request->image_1) {
                $portfolio->image_1 = UploadHelper::upload('image_1', $request->image_1, $request->project_title . '-' .'image-1-'. time(), 'public/backend/images/portfolio');
            }

             if ($request->image_2) {
                $portfolio->image_2 = UploadHelper::upload('image_2', $request->image_2, $request->project_title . '-' .'image-2-'.time(), 'public/backend/images/portfolio');
            }

             if ($request->image_3) {
                $portfolio->image_3 = UploadHelper::upload('image_3', $request->image_3, $request->project_title . '-' .'image-3-'. time(), 'public/backend/images/portfolio');
            }

             if ($request->image_4) {
                $portfolio->image_4 = UploadHelper::upload('image_4', $request->image_4, $request->project_title . '-' .'image-4-'. time(), 'public/backend/images/portfolio');
            }
            $portfolio->overview = $request->overview;
            $portfolio->features = $request->features;
            $portfolio->technology_used = $request->technology_used;
            $portfolio->site_link = $request->site_link;
            $portfolio->created_at = Carbon::now();
            $portfolio->updated_at = Carbon::now();
            $portfolio->save();

            DB::commit();
            session()->flash('success', 'Portfolio has been saved successfully !!');

            return redirect()->route('admin.portfolios.index');
        } catch (\Exception $e) {
            // session()->flash('db_error', 'Error On: '."File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage());
            session()->flash('db_error', $e->getMessage());
            DB::rollBack();
            return back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $portfolio = Portfolio::find($id);
       $menus = Menu::orderBy('id','desc')->get();
       return view('backend.portfolios.edit',compact('portfolio','menus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
           $request->validate([
            'project_title'  => 'required|max:100',
            'menu_id'  => 'required|max:100',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try {
            DB::beginTransaction();
            $portfolio =Portfolio::find($id);
            $portfolio->project_title = $request->project_title;
            $portfolio->menu_id = $request->menu_id;
             if ($request->thumbnail) {
                $portfolio->thumbnail = UploadHelper::update('thumbnail', $request->thumbnail, $request->project_title . '-' . time(), 'public/backend/images/portfolio',$portfolio->thumbnail);
            }

             if ($request->image_1) {
                $portfolio->image_1 = UploadHelper::update('image_1', $request->image_1, $request->project_title . '-' .'image-1-'. time(), 'public/backend/images/portfolio',$portfolio->image_1);
            }

             if ($request->image_2) {
                $portfolio->image_2 = UploadHelper::update('image_2', $request->image_2, $request->project_title . '-' .'image-2-'.time(), 'public/backend/images/portfolio',$portfolio->image_2);
            }

             if ($request->image_3) {
                $portfolio->image_3 = UploadHelper::update('image_3', $request->image_3, $request->project_title . '-' .'image-3-'. time(), 'public/backend/images/portfolio',$portfolio->image_3);
            }

             if ($request->image_4) {
                $portfolio->image_4 = UploadHelper::update('image_4', $request->image_4, $request->project_title . '-' .'image-4-'. time(), 'public/backend/images/portfolio',$portfolio->image_4);
            }
            $portfolio->overview = $request->overview;
            $portfolio->features = $request->features;
            $portfolio->technology_used = $request->technology_used;
            $portfolio->site_link = $request->site_link;
            $portfolio->created_at = Carbon::now();
            $portfolio->updated_at = Carbon::now();
            $portfolio->save();

            DB::commit();
            session()->flash('success', 'Portfolio has been updated successfully !!');

            return redirect()->route('admin.portfolios.index');
        } catch (\Exception $e) {
            // session()->flash('db_error', 'Error On: '."File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage());
            session()->flash('db_error', $e->getMessage());
            DB::rollBack();
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $portfolio = Portfolio::find($id);
        $message = "Portfolio Not found !!";
        $messageType = "error";
        if (!is_null($portfolio)) {
          
            unlink("public/backend/images/portfolio/".$portfolio->thumbnail);
            unlink("public/backend/images/portfolio/".$portfolio->image_1);
            unlink("public/backend/images/portfolio/".$portfolio->image_2);
            unlink("public/backend/images/portfolio/".$portfolio->image_3);
            unlink("public/backend/images/portfolio/".$portfolio->image_4);
            $portfolio->delete();
            $message = 'Portfolio Information has been deleted successfully !';
            $messageType = "success";
            session()->flash($messageType, $message);
        } else {
            session()->flash('error', 'Something went wrong');
        }

        return back();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getMenu()
    {
        $menus=Menu::orderBy('id','desc')->get();
        return view('backend.menus.menu',compact('menus'));
    }

    /**
     * Menu Submit
     */

    public function postMenu(Request $request)
    {
          $request->validate([
            'name'  => 'required|max:100',
        ]);

        try {
            DB::beginTransaction();
            $menu= new Menu();
            $menu->name=$request->name;
            $menu->save();

            DB::commit();
            session()->flash('success', 'Menu has been saved successfully !!');

            return back();
        } catch (\Exception $e) {
            // session()->flash('db_error', 'Error On: '."File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage());
            session()->flash('db_error', $e->getMessage());
            DB::rollBack();
            return back();
        }
    }

    /**
     * Menu delete
     */

    public function deleteMenu($id){
          $menu = Menu::find($id);
        $message = "Menu Not found !!";
        $messageType = "error";
        if (!is_null($menu)) {
            $menu->delete();
            $message = 'Menu has been deleted successfully !';
            $messageType = "success";
            session()->flash($messageType, $message);
        } else {
            session()->flash('error', 'Something went wrong');
        }

        return back();
    }


    /**
     * Skill List
     */

    public function getSkills()
    {
        $skills=Skill::orderBy('id','desc')->get();
        return view('backend.skills.skill',compact('skills'));
    }


    /**
     * Skill Post
     */


       public function postSkills(Request $request)
    {
          $request->validate([
            'title'  => 'required|max:100',
            'skill_type'  => 'required|max:100',
        ]);

        try {
            DB::beginTransaction();
            $skill= new Skill();
            $skill->skill_type=$request->skill_type;
            $skill->title=$request->title;
            $skill->percentage=$request->percentage;
            $skill->save();

            DB::commit();
            session()->flash('success', 'Skill has been saved successfully !!');

            return back();
        } catch (\Exception $e) {
            // session()->flash('db_error', 'Error On: '."File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage());
            session()->flash('db_error', $e->getMessage());
            DB::rollBack();
            return back();
        }
    }

    /**
     * Skill delete
     */

    public function deleteSkill($id){
          $skill = Skill::find($id);
        $message = "Skill Not found !!";
        $messageType = "error";
        if (!is_null($skill)) {
            $skill->delete();
            $message = 'Skill has been deleted successfully !';
            $messageType = "success";
            session()->flash($messageType, $message);
        } else {
            session()->flash('error', 'Something went wrong');
        }

        return back();
    }


    /**
     * Experience List
     */

    public function getExperience()
    {
        $experiences=Experience::orderBy('id','desc')->get();
        return view('backend.experience.experience',compact('experiences'));
    }


    /**
     * Experience Post
     */


       public function postExperience(Request $request)
    {
          $request->validate([
            'organization_name'  => 'required|max:100',
            'time_range'  => 'required|max:100',
        ]);

        try {
            DB::beginTransaction();
            $experience= new Experience();
            $experience->organization_name=$request->organization_name;
            $experience->time_range=$request->time_range;
            $experience->short_description=$request->short_description;
            $experience->save();

            DB::commit();
            session()->flash('success', 'Experience has been saved successfully !!');

            return back();
        } catch (\Exception $e) {
            // session()->flash('db_error', 'Error On: '."File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage());
            session()->flash('db_error', $e->getMessage());
            DB::rollBack();
            return back();
        }
    }

    /**
     * Experience delete
     */

    public function deleteExperience($id){
          $experience = Experience::find($id);
        $message = "experience Not found !!";
        $messageType = "error";
        if (!is_null($experience)) {
            $experience->delete();
            $message = 'Experience has been deleted successfully !';
            $messageType = "success";
            session()->flash($messageType, $message);
        } else {
            session()->flash('error', 'Something went wrong');
        }

        return back();
    }


     /**
     * Banner List
     */

    public function getBanner()
    {
        $banners=Banner::orderBy('id','desc')->first();
        return view('backend.banners.banner',compact('banners'));
    }


    /**
     * Banner Post
     */


       public function updateBanner(Request $request,$id)
    {
          $request->validate([
            'title'  => 'required|max:100',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cv_upload.mimes' => 'Only PDF, doc, docx and pptx files are allowed to upload !'
        ]);

        try {
            DB::beginTransaction();
            $banner= Banner::find($id);
            $banner->title=$request->title;
            $banner->name=$request->name;
             if ($request->image) {
                UploadHelper::deleteFile('public/backend/images/banner/'.$banner->image );
                $banner->image = UploadHelper::update('image', $request->image,'image-banner-'. time(), 'public/backend/images/banner',$banner->image );


            }

            if ($request->cv_upload) {
              UploadHelper::deleteFile('public/backend/images/cv/'.$banner->cv_upload );
                $banner->cv_upload = UploadHelper::update('cv_upload', $request->cv_upload,$request->name. '-' .'CV-UPLOAD-'. time(), 'public/backend/images/cv',$banner->cv_upload);
            }
            $banner->description=$request->description;
            $banner->save();

            DB::commit();
            session()->flash('success', 'Banner has been saved successfully !!');

            return back();
        } catch (\Exception $e) {
            // session()->flash('db_error', 'Error On: '."File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage());
            session()->flash('db_error', $e->getMessage());
            DB::rollBack();
            return back();
        }
    }

    /**
     * Service List
     */

    public function getService()
    {
        $services=Services::orderBy('id','desc')->get();
        return view('backend.services.service',compact('services'));
    }


    /**
     * Service Post
     */


       public function postService(Request $request)
    {
          $request->validate([
            'title'  => 'required|max:100',
            'short_description'  => 'required|max:100',
        ]);

        try {
            DB::beginTransaction();
            $service= new Services();
            $service->title=$request->title;
            $service->short_description=$request->short_description;
            $service->save();

            DB::commit();
            session()->flash('success', 'Service has been saved successfully !!');

            return back();
        } catch (\Exception $e) {
            // session()->flash('db_error', 'Error On: '."File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage());
            session()->flash('db_error', $e->getMessage());
            DB::rollBack();
            return back();
        }
    }

    /**
     * Service delete
     */

    public function deleteService($id){
          $service = Services::find($id);
        $message = "service Not found !!";
        $messageType = "error";
        if (!is_null($service)) {
            $service->delete();
            $message = 'Service has been deleted successfully !';
            $messageType = "success";
            session()->flash($messageType, $message);
        } else {
            session()->flash('error', 'Something went wrong');
        }

        return back();
    }


}
