<?php

declare(strict_types=1);

namespace App\Http\Controllers\Tool\v1;

use App\Http\Controllers\Controller;
use Domain\Tool\Common\JiraTaskConfigId;
use Illuminate\Http\Request;

class JiraTaskConfigController extends Controller {

    public function store(Request $request) {
        var_dump("store");
    }

    public function index(Request $request) {
        $test = JiraTaskConfigId::of(22);
        var_dump($test->getValue());
    }

    public function show(Request $request, $id) {
        var_dump("show" . $id);
    }

    public function update(Request $request, $id) {
        var_dump("update" . $id);
    }

    public function destroy(Request $request, $id) {
        var_dump("delete" . $id);
    }
}