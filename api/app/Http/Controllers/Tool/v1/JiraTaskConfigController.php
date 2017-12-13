<?php

namespace App\Http\Controllers\Tool\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JiraTaskConfigController extends Controller {

    public function store(Request $request) {
        var_dump("store");
    }

    public function index(Request $request) {
        var_dump("index");
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