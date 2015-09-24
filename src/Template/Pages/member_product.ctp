<div class="pg-opt pin">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2><?= __('Thông tin thành viên')?></h2>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb">
                    <li><a href="<?=$this->Url->build('/')?>"><?= __('Trang chủ')?></a></li>
                    <li><a href="<?=$this->Url->build('/')?>member/profile"><?= __('Trang thành viên')?></a></li>
                    <li class="active"><?= __('Sản phẩm - dịch vụ')?></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="slice bg-3">
    <div class="w-section inverse shop">
        <div class="container">
            <div class="row">

                <div class="col-md-9">
                    <div class="w-section inverse">

                        <h3 class="section-title"><?= __('Danh sách sản phẩm dịch vụ')?></h3>

                        <div id="company-product-grid" class="grid-view">
                            <?php if(count($products->toArray()) > 0):?>
                                <?php
                                    $firstNumber = (($page - 1) * 10)+1;
                                    $lastNumber = count($products->toArray());
                                ?>
                                <div class="summary pull-left"><?= __('Hiển thị {0}-{1} của {2} kết quả.', $firstNumber, $lastNumber, $totalProducts) ?></div>
                            <?php endif?>
                            <div class="table-responsive">
                            <table class="table table-advance">
                                <thead>
                                <tr>
                                    <th id="company-product-grid_c0"><?= __('Hình')?></th>
                                    <th id="company-product-grid_c1"><a class="sort-link"
                                                                        href="#"><?= __('Tên sản phẩm / Dịch vụ')?></a></th>
                                    <th id="company-product-grid_c2"><a class="sort-link"
                                                                        href="#"><?= __('Giá')?></a>
                                    </th>
                                    <th id="company-product-grid_c3"><a class="sort-link"
                                                                        href="#"><?= __('Đơn vị')?></a></th>
                                    <th id="company-product-grid_c4"><?= __('Trạng thái')?></th>
                                    <th id="company-product-grid_c5"><?= __('Ngày cập nhật')?></th>
                                    <th class="btn-group" id="company-product-grid_c6">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if(count($products->toArray()) > 0):?>
                                <?php foreach ($products as $item): ?>
                                <tr class="odd">
                                    <td width="140px">
                                        <?php
                                        echo $this->Core->image('Productions/'.$item->image, 60, 60, ['class' => 'img-center', 'url' => '#']);
                                        ?>
                                    </td>
                                    <td><?= $item->name ?></td>
                                    <td><?= $item->price ?></td>
                                    <td></td>
                                    <td width="90px"><?= $item->status==STATUS_APPROVED?__('Đã duyệt'):__('Chờ duyệt') ?></td>
                                    <td width="100px"><?= $this->Time->format($item->created, 'dd/MM/Y') ?></td>
                                    <td style="width:90px">
                                        <a title="Sửa" href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'addProduct', $item->id]) ?>"><i class="fa fa-edit"></i></a>
                                        &nbsp;|&nbsp;
                                        <a class="delete btn btn-xs btn-danger" data-confirm="<?= __('Are you sure you want to delete?') ?>" title="Xóa" href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'deleteProduct', 'id' => $item->id]) ?>"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                <?php else:?>

                                <?php endif?>
                                </tbody>
                            </table>
                            </div>
                            <div class="pager">
                                <ul id="yw0" class="pagination pagination-colory">
                                    <?php if($pageMax > 0):?>
                                        <?php if($page > 1 && $pageMax > 1):?>
                                            <li class="first"><a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'memberProduct', 1]) ?>">&lt;&lt; <?= __('Đầu tiên')?></a></li>
                                            <li class="previous"><a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'memberProduct', $page - 1]) ?>">&lt; <?= __('Trước') ?></a></li>
                                        <?php endif?>
                                        <?php if($pageMax > 1):?>
                                        <?php for($i = 1; $i <= $pageMax; $i++):?>
                                            <li class=""><a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'memberProduct', $page]) ?>"><?= $page?></a></li>
                                        <?php endfor?>
                                        <?php endif?>
                                        <?php if($pageMax > 1 && $page < $pageMax):?>
                                            <li class="last"><a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'memberProduct', $page + 1]) ?>"><?= __('Tiếp theo') ?> &gt;</a></li>
                                            <li class="last"><a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'memberProduct', $pageMax]) ?>"><?= __('Cuối') ?> &gt;&gt;</a></li>
                                        <?php endif?>
                                    <?php endif?>
                                </ul>
                            </div>
                        </div>
                        <a class="btn btn-two pull-right"
                           href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'addProduct']) ?>"><?= __('Đăng sản phẩm mới')?></a></div>
                </div>
                <div class="col-md-3">
                    <?php
                    echo $this->element('frontend/box-member');
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
