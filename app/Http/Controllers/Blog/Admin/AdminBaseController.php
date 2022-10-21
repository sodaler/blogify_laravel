<?php

namespace App\Http\Controllers\Blog\Admin;

use App\Http\Controllers\Blog\BaseController;

/**
 * Базовый контроллер для всех контроллеров управления
 * блогом в панели администрирования.
 *
 * Должен быть родителем для контроллеров управления блогом.
 *
 * @package App\Http\Controllers\Blog\Admin
 */
abstract class AdminBaseController extends BaseController
{
    /**
     * AdminBaseController constructor.
     */
    public function __construct()
    {
        // инициализация общих моментов для админки.
    }
}
