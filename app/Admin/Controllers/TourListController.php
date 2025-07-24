<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Tourdetails;

class TourListController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Tourdetails';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Tourdetails());

        $grid->column('id', __('Id'));
        $grid->column('order_num', __('Order num'));
        $grid->column('name', __('Name'));
        $grid->column('description', __('Description'));
        $grid->column('tour_id', __('Tour id'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Tourdetails::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('order_num', __('Order num'));
        $show->field('name', __('Name'));
        $show->field('description', __('Description'));
        $show->field('tour_id', __('Tour id'));
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
        $form = new Form(new Tourdetails());

        $form->number('order_num', __('Order num'));
        $form->text('name', __('Name'));
        $form->textarea('description', __('Description'));
        $form->text('tour_id', __('Tour id'));

        return $form;
    }
}
