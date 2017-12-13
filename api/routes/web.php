<?php

$router->group(['prefix' => 'tool'], function () use ($router) {
    $router->group(['prefix' => 'v1'], function() use ($router) {
        $router->post('jiraTaskConfig', ['as' => 'tool.jira.task.config.create', 'uses' => 'Tool\v1\JiraTaskConfigController@store']);
        $router->get('jiraTaskConfig', ['as' => 'tool.jira.task.config.list', 'uses' => 'Tool\v1\JiraTaskConfigController@index']);
        $router->get('jiraTaskConfig/{id}', ['as' => 'tool.jira.task.config.show', 'uses' => 'Tool\v1\JiraTaskConfigController@show']);
        $router->put('jiraTaskConfig/{id}', ['as' => 'tool.jira.task.config.update', 'uses' => 'Tool\v1\JiraTaskConfigController@update']);
        $router->delete('jiraTaskConfig/{id}', ['as' => 'tool.jira.task.config.delete', 'uses' => 'Tool\v1\JiraTaskConfigController@destroy']);
    });
});

$router->get('/', function () use ($router) {
    return $router->app->version();
});
