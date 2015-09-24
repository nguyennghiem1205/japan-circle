<section class="slice bg-3 animate-hover-slide">
    <div class="w-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="w-section inverse">
                        <div class="w-section inverse">
                            <div class="w-box sign-in-wr bg-5">
                                <div class="form-header">
                                    <h2>Đăng sản phẩm / dịch vụ</h2>
                                </div>
                                <div class="form-body">
                                    <?= $this->Form->create($companyInquiry, ['class'=>'form-light padding-15','id'=>'company-product-form']) ?>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phân loại ngành <span class="must">*</span></label>
                                            <?=$this->Form->input('industry_code', ['label'=>false,'class'=>'form-control','options' => $industries])?>
                                            <div class="errorMessage" id="CompanyProduct_industry_id_em_" style="display:none"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tên sản phẩm <span class="must">*</span></label>
                                            <?=$this->Form->input('title',['class'=>'form-control','label'=>false])?>
                                            <div class="errorMessage" id="CompanyProduct_product_name_em_" style="display:none"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Mô tả ngắn <span class="must">*</span></label>
                                            <?=$this->Form->input('description',['class'=>'form-control','label'=>false,'type'=>'textarea','rows'=>'2'])?>
                                            <div class="errorMessage" id="CompanyProduct_product_desc_em_" style="display:none"></div> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Loại hợp tác <span class="must">*</span></label>
                                            <?=$this->Form->input('type', ['label'=>false,'class'=>'form-control','options' => $type])?>
                                            <div class="errorMessage" id="CompanyProduct_product_photo_em_" style="display:none"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Hình sản phẩm</label>
                                            <?=$this->Form->input('image', ['label'=>false,'class'=>'form-control','type'=>'file'])?>
                                            <?php
                                            $dataMember=$this->request->session()->read('Member');
                                            $idmem = $dataMember['id'];
                                            echo $this->Form->input('status',['type'=>'hidden','value'=>'STATUS_UNAPPROVED']);
                                            echo $this->Form->input('member_id', ['type'=>'hidden','value'=>$idmem]);
                                            echo $this->Form->input('order',['type'=>'hidden','value'=>'1']);
                                            ?>
                                            <div class="errorMessage" id="CompanyProduct_product_photo_em_" style="display:none"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12"> <button class="btn btn-three pull-right" type="submit">Lưu thông tin</button> </div>
                                </div>
                                <?= $this->Form->end() ?>
                            </div>
                            <div class="form-footer">
                                <p>Thông tin sản phẩm / dịch vụ của quý khách sẽ được chúng tôi kiểm duyệt trước khi công bô thông tin.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Container cennter -->
                <div class="col-md-3">
                    <?php
                    echo $this->element('frontend/box-member');
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>