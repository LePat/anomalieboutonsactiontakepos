<?php
/* Copyright (C) 2023		Laurent Destailleur			<eldy@users.sourceforge.net>
 * Copyright (C) 2025		SuperAdmin
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

/**
 * \file    anomalieboutonsactiontakepos/class/actions_anomalieboutonsactiontakepos.class.php
 * \ingroup anomalieboutonsactiontakepos
 * \brief   Example hook overload.
 *
 * TODO: Write detailed description here.
 */

require_once DOL_DOCUMENT_ROOT.'/core/class/commonhookactions.class.php';

/**
 * Class ActionsAnomalieBoutonsActionTakePOS
 */
class ActionsAnomalieBoutonsActionTakePOS extends CommonHookActions
{

    public function __construct() {}
    
    public function ActionButtons($parameters, &$object, &$action, $hookmanager)
    {
        $this->results[][] = array('title' => '<span class="fa fa-edit"></span><div class="trunc">Edit</div>', 'action' => 'console.log(\'edit\');');
        $this->results[][] = array('title' => '<span class="fa fa-save"></span><div class="trunc">Save</div>', 'action' => 'console.log(\'save\');');
        $this->results[][] = array('title' => '<span class="fa fa-search"></span><div class="trunc">Search</div>', 'action' => 'console.log(\'search\');');
        $this->results[][] = array('title' => '<span class="fa fa-trash"></span><div class="trunc">Suppr</div>', 'action' => 'console.log(\'suppr\');');
        //$this->results[][] = array('title' => '<span class="fa fa-plus-circle"></span><div class="trunc">Plus</div>', 'action' => 'console.log(\'plus\');');
        return 0;
    }

}
