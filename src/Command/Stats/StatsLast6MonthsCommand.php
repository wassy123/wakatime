<?php
/**
 * Copyright (C) Dominik Voda - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Dominik Voda <d.voda94@gmail.com>
 *
 * Created by PhpStorm.
 * Date: 12.08.2016
 * Time: 0:38
 */

namespace WakaTime\Command;


class StatsLast6MonthsCommand extends StatsCommand
{
    protected function configure()
    {
        $this->setName("stats:last-6-months");
        parent::configure();
    }

    protected function commandType()
    {
        return CommandType::STATS_LAST_6_MONTH;
    }
}