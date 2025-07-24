<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Packagedetails;

class PackagedetailsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Packagedetails';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Packagedetails());

        $grid->column('id', __('Id'));
        $grid->column('order_num', __('Order num'));
        $grid->column('name', __('Name'));
        $grid->column('description', __('Description'));
        $grid->column('package_id', __('Package id'));
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
        $show = new Show(Packagedetails::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('order_num', __('Order num'));
        $show->field('name', __('Name'));
        $show->field('description', __('Description'));
        $show->field('package_id', __('Package id'));
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
        $form = new Form(new Packagedetails());

        $form->number('order_num', __('Order num'));
        $form->text('name', __('Name'));
        $form->textarea('description', __('Description'));
        $form->text('package_id', __('Package id'));

        return $form;
    }
}
