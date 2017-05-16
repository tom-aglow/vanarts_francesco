<?php

namespace core;

class Controller {
    private $settings;

    public function __construct () {
        $this->settings = include_once __DIR__ . '/../settings.php';
    }

    public function render ($page) {
        $menuList = ($page == 'menu' || $page == 'wine-list') ? $this->reformatMenuList($this->getListFromFile('menu', $page))  : '';
        $galleryList = ($page == 'gallery') ? $this->getListFromFile('gallery', $page)  : '';

        $pageContent = System::buildTemplate($page . '.php', [
            'menuList' => $menuList,
            'galleryList' => $galleryList
        ]);

        $html = System::buildTemplate('main.php', [
            'pageTitle' => $this->settings[$page]['title'],
            'pageStyles' => $this->settings[$page]['styles'] ?? [],
            'pageScript' => $this->settings[$page]['script'] ?? [],
            'navActive' => [$page => 'active'],
            'pageContent' => $pageContent,        //array
            'pageContentClass' => $page          //string
        ]);

        echo $html;
    }

    private function getListFromFile ($file, $page) {
        $row = 1;
        $list = [];
        if (($handle = fopen("assets/$file.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);
                if ($row == 1 || $data[0] == $page) {
                    for ($c=0; $c < $num; $c++) {
                        if ($row < 2) {
                            $list[$row][] = $data[$c];
                        } else {
                            $list[$row][$list[1][$c]] = $data[$c];
                        }
                    }
                }
                $row++;
            }
            fclose($handle);
        }
        array_splice($list, 0, 1);

        return $list;
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