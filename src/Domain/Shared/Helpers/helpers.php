<?php
/**
 * Created by PhpStorm.
 * User: aabed
 * Date: 3/20/19
 * Time: 02:36 PM
 */

use Modules\BlogModule\Repository\BlogCategoryRepository;
use Modules\BlogModule\Repository\BlogRepository;
use Modules\TripModule\Repository\DestinationRepository;
use Modules\TripModule\Repository\TripCategoryRepository;

if (!function_exists('ValueOf')) {

	function ValueOf($object, $lang, $variable) {
		if (isset($object->translate('' . $lang->lang)->$variable)) {
			$newVar = $object->translate('' . $lang->lang)->$variable;
		} else {
			$newVar = "";
		}
		return $newVar;
	}
}

if (!function_exists('assets')) {

	function assets($url) {
		return asset('public/assets/front/' . $url);
	}
}

if (!function_exists('adminurl')) {

	function adminurl($url) {
		return asset('public/assets/admin/' . $url);
	}
}

if (!function_exists('categories')) {

	function categories() {
		$categRepo = new TripCategoryRepository();

		return $categRepo->findAll();

	}
}



if (!function_exists('cat_blogs')) {

	function cat_blogs() {
		$blogRepo = new BlogCategoryRepository;

		return $blogRepo->findAll();
	}
}

if (!function_exists('latestBlogs')) {

	function latestBlogs() {
		$blogRepo = new BlogRepository;

		return $blogRepo->findLastByLimit(3);
	}
}

if (!function_exists('latestTrips')) {

	function latestTrips() {
		$tripRepo = resolve('Modules\TripModule\Repository\TripRepository');

		return $tripRepo->findLastByLimit(5);
	}
}



if (!function_exists('pages')) {

	function pages() {

		$pageRepository = resolve('Modules\WidgetsModule\Repository\PageRepository');

		return $pageRepository->findAll();

	}
}

if (!function_exists('active')) {

	function active($key) {

		if (\Request::segment(2) == $key) {
			return 'active';
		}

	}
}

if (!function_exists('yajra_lang')) {
    function yajra_lang()
    {
        $yajra_trans = [
            "sProcessing" => __('main.download'),
            "sLengthMenu" => __('main.show') . " _MENU_" . __('main.records'),
            "sZeroRecords" => __('main.zero_record'),
            "sEmptyTable" => __('main.none_record_table'),
            "sInfo" => __('main.showing') . " " . __('main.records') . __('main.ofthe') . " _START_ " . __('main.of') . " _END_ " . __('main.ofatotalof') . " _TOTAL_ " . __('main.records'),
            "sInfoEmpty" => __('main.zero_records'),
            "sInfoFiltered" => "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix" => "",
            "sSearch" => __('main.search'),
            "sUrl" => "",
            "sInfoThousands" => ",",
            "sLoadingRecords" => "Cargando...",
            "oPaginate" => [
                "sFirst" => __('main.first'),
                "sLast" => __('main.last'),
                "sNext" => __('main.next'),
                "sPrevious" => __('main.previous'),
            ],
            "oAria" => [
                "sSortAscending" => "=> Activar para ordenar la columna de manera ascendente",
                "sSortDescending" => "=> Activar para ordenar la columna de manera descendente"
            ],
        ];
        return json_encode($yajra_trans, JSON_UNESCAPED_UNICODE);
    }
}

