<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Package;
use \App\Models\Region;
use \App\Models\Budget;
use \App\Models\Duration;
use \App\Models\TravelerType;
use \App\Models\ExperienceType;

class PackageController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Package';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Package());

          $grid->column('title', __('Title'));
        $grid->column('thumnail_image', __('Thumnail image'))->image('/uploads/', 100, 100);
             $states = [
            'on' => ['value' => 1, 'text' => 'Active', 'color' => 'primary'],
            'off' => ['value' => 0, 'text' => 'InActive', 'color' => 'default'],
        ];
       $grid->column('is_featured', __('Is Featured'))->switch($states);

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Package::findOrFail($id));

        $show->field('id', __('Id'));
       
        $show->field('title', __('Title'));
        $show->field('slug', __('Slug'));
        $show->field('destination_name', __('Destination name'));
        $show->field('short_description', __('Short description'));
        $show->field('tour_days', __('Tour days'));
        $show->field('tour_location', __('Tour location'));
        $show->field('description', __('Description'));
        $show->field('price', __('Price'));
        $show->field('stars', __('Stars'));
        $show->field('reviews', __('Reviews'));
      
        $show->field('gallery', __('Gallery'));
        $show->field('seo_title', __('Seo title'));
        $show->field('seo_description', __('Seo description'));
        $show->field('seo_keyword', __('Seo keyword'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));


        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Package());


        $form->tab('Fillter', function ($form) {
      $form->select('region_id',__('Destination Category'))->options(Region::pluck('name', 'id'))->default(null)->rules('required');
      $form->select('budget_id',__('Budget Category'))->options(Budget::pluck('name', 'id'))->default(null)->rules('required');
      $form->select('duration_id',__('Duration Category'))->options(Duration::pluck('name', 'id'))->default(null)->rules('required');
      $form->select('traveler_id',__('Traveler Category'))->options(TravelerType::pluck('name', 'id'))->default(null)->rules('required');
      $form->select('experience_id',__('Experience Category'))->options(ExperienceType::pluck('name', 'id'))->default(null)->rules('required');
        
});
$form->tab('Info', function ($form) {

        
        $form->text('title', __('Title'));
        $form->hidden('slug');

        $form->saving(function (Form $form) {

           $form->slug = strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-',trim($form->title)));
        });
        $form->text('destination_name', __('Destination name'));
        $form->textarea('short_description', __('Short description'));
        $form->text('tour_days', __('Tour days'));
        $form->text('tour_location', __('Tour location'));
        $form->textarea('description', __('Description'));
});
$form->tab('Package', function ($form) {
        $form->text('price', __('Tour Price'));
        $form->text('stars', __('Stars'));
        $form->text('reviews', __('Reviews Number'));
        $form->list('attractions',__('Tour Attractions'))->sortable();
    

});
$form->tab('PackageItinerary', function ($form) {
        $form->hasMany('packagedetailsinsert','PackageItinerary', function (Form\NestedForm $form) {
		          $form->text('order_num', __('Order Num'));
		          $form->text('name', __('Name'));
			        $form->textarea('description', __('Description'));
		     });


});
$form->tab('Images', function ($form) {
        $form->image('thumnail_image', __('Thumnail image'));
        $form->image('banner_image', __('Banner image'));
        $form->multipleImage('gallery', __('Gallery'));


});
$form->tab('Seo', function ($form) {
        $form->textarea('seo_title', __('Seo title'));
        $form->textarea('seo_description', __('Seo description'));
        $form->textarea('seo_keyword', __('Seo keyword'));
                 $form->switch('is_featured', __('Is Featured'))->options([
    1 => 'Active',
    0 => 'Inactive',
]);

});

        return $form;
    }
}
