<div class="navbar navbar-white" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="<?= $this->Url->build('/') ?>"> <img src="<?php echo $this->Url->build('/frontend/images/') ?>japan-circle.png" alt="Japan Circle - Kết nối giao thương Việt - Nhật"> </a> </div>

        <!-- Begin  Menu -->

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="<?= ($this->request->action == 'index')?'active':null ?>" style="width:auto"> <a href="<?= $this->Url->build('/'); ?>" class="dropdown-toggle" data-hover="dropdown" data-close-others="true"><?= __('Trang chủ')?></a></li>

                <?php
                $currentUrl = $this->Url->build($this->request->here(false), true);
                foreach ($menuParents as $parent):
                    $active = null;
                    if (strpos($currentUrl, $parent['url'])) {
                        $active = 'active';
                    }
                    $options = null;
                    $hasSub = false;
                    if (isset($subMenu[$parent['id']]) && $subMenu[$parent['id']]) {
                        $hasSub = true;
                        $options = 'data-toggle="dropdown" data-hover="dropdown" data-close-others="true"';
                    }
                    ?>
                    <li class="dropdown <?= $active ?>" > <a <?= $options ?> href="<?= $parent['url']; ?>"><?= $parent['name_'.$fieldLanguage] ?></a>
                        <?php
                        if ($hasSub) {
                            echo '<ul class="dropdown-menu">';
                            foreach ($subMenu[$parent['id']] as $sub) {
                                $active = null;
                                if (strpos($currentUrl, $sub['url'])) {
                                    $active = 'active';
                                }
                                echo '<li class="'.$active.'">';
                                echo $this->Html->link($sub['name_'.$fieldLanguage], $sub['url'], ['alt' => $sub['name']]);
                                echo '</li>';
                            }
                            echo '</ul>';
                        }
                        ?>
                    </li>
                <?php endforeach; ?>
                <?php
                $listLang = \Cake\Core\Configure::read('Core.System.language');
                $defaultLang = [];
                foreach ($listLang as $key => $value) {
                    $defaultLang[$value['key']] = $value;
                }
                foreach($listLang as $value):
                    ?>
                    <li class="language-li">
                        <a href="<?= $this->Url->build(['plugin' => null, 'controller' => 'pages', 'action' => 'change_language', $value['key']])?>"><img src="<?= $this->Url->build('/img/blank.gif') ?>" class="flag <?= $value['flag']?>" alt="<?= $value['name']?>"></a>
                    </li>
                <?php endforeach; ?>

            </ul>
        </div>
        <!-- End  Menu -->
    </div>
    <!--/.nav-collapse -->
</div>