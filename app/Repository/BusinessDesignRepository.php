<?php

namespace App\Repository;
use Illuminate\Support\Facades\Auth;
use App\Models\BusinessDesign;

class BusinessDesignRepository
{
    //存資訊
    public function store($request, $htmlAttrs, $tableName)
    {
        $BusinessDesign = new BusinessDesign();
        $BusinessDesign->title =  $request->input('form_title');
        $BusinessDesign->html_attrs = json_encode($htmlAttrs);
        $BusinessDesign->required = json_encode($request->input('required'));
        $BusinessDesign->html_attr_title = json_encode($request->input('html_attr_title'));
        $BusinessDesign->new_table_name = $tableName;
        $BusinessDesign->username = Auth::user()->username;
        $BusinessDesign->user_id = Auth::user()->id;
        $BusinessDesign->status = 1;
        $BusinessDesign->save();
    }

    //find
    public function find($id)
    {
        $model = new BusinessDesign();
        return $model->find($id);
    }

    //getByField
    public function getByField( $field,$id)
    {
        $model = new BusinessDesign();
        return $model->where($field,$id)->get();
    }
    
}
