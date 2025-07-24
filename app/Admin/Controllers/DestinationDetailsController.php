<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Destination;
use \App\Models\Region;

class DestinationDetailsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Destination';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Destination());

        $grid->column('id', __('Id'));
        $grid->column('regionCategory.name', __('Region id'));
        $grid->column('title', __('Title'));
      

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
        $show = new Show(Destination::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('region_id', __('Region id'));
        $show->field('thumnail_image', __('Thumnail image'));
        $show->field('banner_image', __('Banner image'));
        $show->field('gallery', __('Gallery'));
        $show->field('title', __('Title'));
        $show->field('short_description', __('Short description'));
        $show->field('tour_days', __('Tour days'));
        $show->field('tour_location', __('Tour location'));
        $show->field('description', __('Description'));
        $show->field('itinerary', __('Itinerary'));
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
        $form = new Form(new Destination());

         $form->tab('Info', function ($form) {
         $form->select('region_id',__('Destination Category'))->options(Region::pluck('name', 'id'))->default(null)->rules('required');
        $form->text('title', __('Title'));
          $form->hidden('slug');

        $form->saving(function (Form $form) {

           $form->slug = strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-',trim($form->title)));
        });
        $form->text('destination_name', __('Destination Name'));
        $form->textarea('short_description', __('Short description'));
        $form->text('tour_days', __('Trip-Duration'));
              $form->text('tour_location', __('Trip-Location'));
        $form->textarea('description', __('Description'));
 });
 $form->tab('Images', function ($form) {
        $form->image('thumnail_image', __('Thumnail image'));
        $form->image('banner_image', __('Banner image'));
        $form->multipleImage('gallery', __('Gallerys'));
 });
  
        // $form->text('itinerary', __('Itinerary'));
         $form->tab('TourItinerary', function ($form) {
              $form->hasMany('touretailsinsert','TourItinerary', function (Form\NestedForm $form) {
		          $form->text('order_num', __('Order Num'));
		          $form->text('name', __('Name'));
			        $form->textarea('description', __('Description'));
		     });
           });

  $form->tab('SEO', function ($form) {
        $form->text('seo_title', __('Seo Title'));
        $form->textarea('seo_description', __('Seo Description'));
        $form->textarea('seo_keyword', __('Seo Keyword'));
  });

        return $form;
    }
}
