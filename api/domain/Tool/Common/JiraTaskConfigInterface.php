<?php

declare(strict_types=1);

namespace Domain\Tool\Common;

use Carbon\Carbon;

interface JiraTaskConfigInterface
{
    /**
     * @return JiraTaskConfigId
     */
    public function getId(): JiraTaskConfigId;

    /**
     * 判断时间是否是有效期内
     * @param Carbon|null $start_date
     * @param Carbon|null $end_date
     * @return bool
     */
    public function isValidTask(?Carbon $start_date = null, ?Carbon $end_date): bool;

    /**
     * 返回邮件发送的时间点
     * @return string
     */
    public function getTiming(): string;

    /**
     * 获取jira项目id列表
     * @return array
     */
    public function getJiraIdList(): array;

    /**
     * 获取配置的用户邮箱列表
     * @return array
     */
    public function getUserMailList(): array;

    /**
     * 获取配置的类型
     * @return int
     */
    public function getType(): int;
}