
<section id="header">
    <nav class="navbar" style="z-index: 9999;background: #151515;">
        <div class="container">
            <div class="col-md-12 col-lg-12">
                <div class="navbar-header"> 
                    <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="glyphicon glyphicon-list"></span>
                       
                      
                    </button>
                    <div class="icon-cart-mobile hidden-md hidden-lg">
                         <a href="gio-hang">
                            <i class="fa fa-shopping-cart" aria-hidden="true" style="color: #0f9ed8; font-size: 17px;"></i>
                            <span>(<?php  
                               if($this->session->userdata('cart')){
                                $val = $this->session->userdata('cart');
                                echo count($val);
                            }else{
                                echo 0;
                            }
                            ?>)</span>
                        </a>
                    </div>
                   
                   <!--  <div class="icon-cart-mobile hidden-md hidden-lg">
                        <a href="gio-hang">
                            <i class="fa fa-shopping-cart" aria-hidden="true" style="color: #0f9ed8; font-size: 17px;"></i>
                            <span>(<?php  
                               if($this->session->userdata('cart')){
                                $val = $this->session->userdata('cart');
                                echo count($val);
                            }else{
                                echo 0;
                            }
                            ?>)</span>
                        </a>
                    </div> -->
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar navbar-nav" id="nav1">
                        <li><a href="<?php echo base_url() ?>">Trang ch???</a></li>
                        <li><a href="san-pham/1">S???n ph???m</a></li>
                        <li><a href="tin-tuc/1">Tin t???c</a></li>
                        <li><a href="gioi-thieu">Gi???i thi???u</a></li>
                        <li><a href="lien-he">Li??n h???</a></li>
                        <li><a href="thong-tin-khach-hang" title="T??i kho???n">T??i kho???n</a></li>
                        <?php 
                        if($this->session->userdata('sessionKhachHang')){
                            echo "<li><a href='dang-xuat'>Tho??t</a></li>";
                        }else{
                            echo "<li><a href='dang-ky'>????ng k??</a></li>";
                            echo "<li><a href='dang-nhap'>????ng nh???p</a></li>";
                        }
                        ?>
                    </ul>
                    <ul class="nav navbar navbar-nav pull-right" id="nav2">
                        <li><a href="thong-tin-khach-hang" title="T??i kho???n">T??i kho???n</a></li>
                        <?php 
                        if($this->session->userdata('sessionKhachHang')){
                            $name=$this->session->userdata('sessionKhachHang_name');
                            echo "<li><a >Xin ch??o: $name</a></li>";
                            echo "<li><a href='dang-xuat'>Tho??t</a></li>";
                        }else{
                            echo "<li><a href='dang-ky'>????ng k??</a></li>";
                            echo "<li><a href='dang-nhap'>????ng nh???p</a></li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</section>