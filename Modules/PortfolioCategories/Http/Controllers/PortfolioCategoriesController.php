<?php

namespace Modules\PortfolioCategories\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\PortfolioCategories\Entities\PortfolioCategories;
use Yajra\DataTables\Facades\DataTables;
use Throwable;
use DB;
use Auth;
class PortfolioCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        if (request()->ajax()) {
        $port=PortfolioCategories::select('*')->orderBy('id','ASC')->get();
           return DataTables::of($port)
           ->addColumn('action',function ($row){
               $action='';
               if(Auth::user()->can('portfolio-categories.edit')){
               $action.='<a class="btn btn-primary btn-sm m-1" href="'.url('portfolio-categories/edit/'.$row->id).'"><i class="fas fa-pencil-alt"></i></a>';
            }
            if(Auth::user()->can('portfolio-categories.delete')){
               $action.='<a class="btn btn-danger btn-sm m-1" href="'.url('portfolio-categories/destroy/'.$row->id).'"><i class="fas fa-trash-alt"></i></a>';
           }
               return $action;
           })
            ->addColumn('status',function ($row){
               $status='';
               if($row->status==1){
               $status.='<a class="btn btn-success btn-sm m-1" href="'.url('portfolio-categories/status/'.$row->id).'">Active</a>';
                }else{
               $status.='<a class="btn btn-danger btn-sm m-1" href="'.url('portfolio-categories/status/'.$row->id).'">Deactive</a>';                
           }
               return $status;
           })
           ->rawColumns(['action','status'])
           ->make(true);
        }
        return view('portfoliocategories::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('portfoliocategories::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $req)
    {
        $req->validate([
           'name'=>'required', 
           'icone'=>'required', 
           'description'=>'required', 
        ]);
        DB::beginTransaction();
        try{
            PortfolioCategories::create($req->except('_token'));
            DB::commit();
            return redirect('portfolio-categories')->with('success','Portfolio Categories successfully created');
         }catch(Exception $ex){
            DB::rollback();
         return redirect()->back()->with('error','Something went wrong with this error: '.$ex->getMessage());
        }catch(Throwable $ex){
            DB::rollback();
        return redirect()->back()->with('error','Something went wrong with this error: '.$ex->getMessage());


        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('portfoliocategories::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */


             /**
     * Update status.
     * @param int $id
     * @return Renderable
     */
    public function status($id)
    {
        DB::beginTransaction();
        try{
        $page=PortfolioCategories::find($id);

        if($page->status==1){
            $page->status=0;
        }
        else{
            $page->status=1;
        }
        $page->save();
        DB::commit();
         return redirect('portfolio-categories')->with('success','Portfolio Categories status successfully updated');
         
         } catch(Exception $e){
            DB::rollback();
            return redirect()->back()->with('error','Something went wrong with this error: '.$e->getMessage());
         }catch(Throwable $e){
            DB::rollback();
            return redirect()->back()->with('error','Something went wrong with this error: '.$e->getMessage());
         }
    } 
    public function edit($id)
    {
        $port=PortfolioCategories::find($id);
        return view('portfoliocategories::edit',compact('port'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $req, $id)
    {
        $req->validate([
           'name'=>'required', 
           'icone'=>'required', 
           'description'=>'required', 
        ]);
        DB::beginTransaction();
        try{
            PortfolioCategories::find($id)->update($req->except('_token'));
            DB::commit();
            return redirect('portfolio-categories')->with('success','Portfolio Categories successfully Updated');
         }catch(Exception $ex){
            DB::rollback();
         return redirect()->back()->with('error','Something went wrong with this error: '.$ex->getMessage());
        }catch(Throwable $ex){
            DB::rollback();
        return redirect()->back()->with('error','Something went wrong with this error: '.$ex->getMessage());


        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try{
            PortfolioCategories::find($id)->delete();
            DB::commit();
            return redirect('portfolio-categories')->with('success','Portfolio Categories successfully Deleted');
         }catch(Exception $ex){
            DB::rollback();
         return redirect()->back()->with('error','Something went wrong with this error: '.$ex->getMessage());
        }catch(Throwable $ex){
            DB::rollback();
        return redirect()->back()->with('error','Something went wrong with this error: '.$ex->getMessage());


        }
    }
}
