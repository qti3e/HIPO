<?php
/*****************************************************************************
 *         In the name of God the Most Beneficent the Most Merciful          *
 *___________________________________________________________________________*
 *   This program is free software: you can redistribute it and/or modify    *
 *   it under the terms of the GNU General Public License as published by    *
 *   the Free Software Foundation, either version 3 of the License, or       *
 *   (at your option) any later version.                                     *
 *___________________________________________________________________________*
 *   This program is distributed in the hope that it will be useful,         *
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of          *
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the           *
 *   GNU General Public License for more details.                            *
 *___________________________________________________________________________*
 *   You should have received a copy of the GNU General Public License       *
 *   along with this program.  If not, see <http://www.gnu.org/licenses/>.   *
 *___________________________________________________________________________*
 *                       Created by AliReza Ghadimi                          *
 *     <http://AliRezaGhadimi.ir>    LO-VE    <AliRezaGhadimy@Gmail.com>     *
 *****************************************************************************/

class admin_login extends view{
    public $loadHeader  = false;
    public $loadFooter  = false;

    public function main($input){
        if(isset($_SESSION['admin'])){
            header("Location:".main_url."admin_index");
        }
        if(isset($_POST['username']) && isset($_POST['password'])){
            if($_POST['username'] == admin_username && $_POST['password'] == md5(admin_password)){
                $_SESSION['admin'] = true;
                $this->ajax = [
                    "code" => "ok"
                ];
            }else{
                $this->ajax = [
                    "code" => "nok"
                ];
            }
        }
    }
}