<?php

namespace core;

class Controller {



    public function render ($page) {
        $menuList = ($page == 'menu' || $page == 'wine-list') ? $this->getMenuList($page) : '';

        $pageContent = System::buildTemplate($page . '.php', [
            'menuList' => $menuList
        ]);

        $html = System::buildTemplate('main.php', [
            'pageTitle' => '',
            'pageContent' => $pageContent,        //array
            'pageContentClass' => $page          //string
        ]);

        echo $html;
    }

    public function getMenuList ($page) {
        $row = 1;
        $menu = [];
        if (($handle = fopen("assets/menu.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);
                if ($row == 1 || $data[0] == $page) {
                    for ($c=0; $c < $num; $c++) {
                        if ($row < 2) {
                            $menu[$row][] = $data[$c];
                        } else {
                            $menu[$row][$menu[1][$c]] = $data[$c];
                        }
                    }
                }
                $row++;
            }
            fclose($handle);
        }
        array_splice($menu, 0, 1);

        return $this->reformatMenuList($menu);
    }

    private function reformatMenuList ($menu) {
        $newMenu = [];

        foreach ($menu as $item) {
            $newMenu[$item['subtype']][] = [
                'name' => $item['name'],
                'desc' => $item['desc'],
                'price' => $item['price']
            ];
        }
        return $newMenu;
    }
}