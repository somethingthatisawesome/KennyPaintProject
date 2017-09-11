<?php
$PageTitle="KennyPaint | Product";
include_once('header.php');
include_once("./admin/Database/iMySQL.php");
include_once("./admin/Database/KennyPaintDatabase.php");
include_once("./admin/Database/Products.php");
include_once("./admin/Database/Category.php");
$db = new KennyPaintDatabase();
$t_category = new TB_CATEGORY();
$categories = $db->get($t_category);
?>
<body cz-shortcut-listen="true">
<?php
include_once('menu.php');
?>
    <div class="style-1 sub-banner" data-ix="show-go-top-on-scroll" id="Top">
        <div class="container-center w-container">
            <div class="align-center">
                <div class="sub-text-title white">our projects</div>
                <h1 class="heading-white title-top">The buildings we create inspire us,<br> reflect who we are as a society.</h1></div>
        </div>
    </div>
    <div class="no-bottom-pading section">
        <div class="border-top second-navigation"></div>
        <div class="w-tabs" data-duration-in="300" data-duration-out="100">
            <div class="project-tab w-tab-menu">
                <?php
				$first = 'w--current';
				foreach($categories as $category)
				{
					echo '<a class="line-dark tab-link-project '.$first.' w-inline-block w-tab-link" data-w-tab="Tab '.$category->getCATEGORY_ID().'">';
                    echo '<div>'.$category->getCATEGORY_NAME().'</div>';
					echo '</a>';
					$first="";
				}
				?>
            </div>
            <div class="w-tab-content">
                <div class="w--tab-active w-tab-pane" data-w-tab="Tab 1">
                    <div class="w-dyn-list">
                        <div class="w-clearfix w-dyn-items w-row">
                            <div class="dynamic-project-first w-col w-col-6 w-dyn-item">
                                <div>
                                    <div class="w-clearfix">
                                        <div class="project-content-style-3">
                                            <div class="category-name style-3">Painting</div>
                                            <h4 class="less-marg small-title">Curabitur vestibulum</h4>
                                            <div class="top-margin">
                                                <p>Aenean commodo ligula eget dolor. Aliquam lobortis. Phasellus volutpat, metus eget egestas mollis [...]</p>
                                            </div>
                                            <div class="learn-bottom"><a class="learn-more" href="http://sangs-fresh-project.webflow.io/project/curabitur-vestibulum">Learn More &gt;</a></div>
                                        </div>
                                        <a class="project-photo w-inline-block" href="http://sangs-fresh-project.webflow.io/project/curabitur-vestibulum"><img class="project-image-second" sizes="(max-width: 479px) 100vw, (max-width: 991px) 50vw, 25vw" width="1476" src="./Product_files/5989714e76433a0001206b94_port12.jpg" srcset="https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b94_port12-p-500x375.jpeg 500w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b94_port12-p-800x600.jpeg 800w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b94_port12-p-1080x810.jpeg 1080w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b94_port12.jpg 1100w"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="dynamic-project-first w-col w-col-6 w-dyn-item">
                                <div>
                                    <div class="w-clearfix">
                                        <div class="project-content-style-3">
                                            <div class="category-name style-3">Painting</div>
                                            <h4 class="less-marg small-title">Etiam utif</h4>
                                            <div class="top-margin">
                                                <p>Aenean commodo ligula eget dolor. Aliquam lobortis. Phasellus volutpat, metus eget egestas mollis [...]</p>
                                            </div>
                                            <div class="learn-bottom"><a class="learn-more" href="http://sangs-fresh-project.webflow.io/project/etiam-utif">Learn More &gt;</a></div>
                                        </div>
                                        <a class="project-photo w-inline-block" href="http://sangs-fresh-project.webflow.io/project/etiam-utif"><img class="project-image-second" sizes="(max-width: 479px) 100vw, (max-width: 991px) 50vw, 25vw" width="1476" src="./Product_files/5989714e76433a0001206ba0_port7.jpg" srcset="https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206ba0_port7-p-500x375.jpeg 500w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206ba0_port7-p-800x600.jpeg 800w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206ba0_port7-p-1080x810.jpeg 1080w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206ba0_port7.jpg 1100w"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="dynamic-project-first w-col w-col-6 w-dyn-item">
                                <div>
                                    <div class="w-clearfix">
                                        <div class="project-content-style-3">
                                            <div class="category-name style-3">Architecture</div>
                                            <h4 class="less-marg small-title">Suspendi eussse</h4>
                                            <div class="top-margin">
                                                <p>Aenean commodo ligula eget dolor. Aliquam lobortis. Phasellus volutpat, metus eget egestas mollis [...]</p>
                                            </div>
                                            <div class="learn-bottom"><a class="learn-more" href="http://sangs-fresh-project.webflow.io/project/suspendi-eussse">Learn More &gt;</a></div>
                                        </div>
                                        <a class="project-photo w-inline-block" href="http://sangs-fresh-project.webflow.io/project/suspendi-eussse"><img class="project-image-second" sizes="(max-width: 479px) 100vw, (max-width: 991px) 50vw, 25vw" width="1476" src="./Product_files/5989714e76433a0001206b96_port1.jpg" srcset="https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b96_port1-p-500x375.jpeg 500w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b96_port1-p-800x600.jpeg 800w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b96_port1-p-1080x810.jpeg 1080w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b96_port1.jpg 1100w"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="dynamic-project-first w-col w-col-6 w-dyn-item">
                                <div>
                                    <div class="w-clearfix">
                                        <div class="project-content-style-3">
                                            <div class="category-name style-3">Painting</div>
                                            <h4 class="less-marg small-title">Vestibulum dapibus</h4>
                                            <div class="top-margin">
                                                <p>Aenean commodo ligula eget dolor. Aliquam lobortis. Phasellus volutpat, metus eget egestas mollis [...]</p>
                                            </div>
                                            <div class="learn-bottom"><a class="learn-more" href="http://sangs-fresh-project.webflow.io/project/vestibulum-dapibus">Learn More &gt;</a></div>
                                        </div>
                                        <a class="project-photo w-inline-block" href="http://sangs-fresh-project.webflow.io/project/vestibulum-dapibus"><img class="project-image-second" sizes="(max-width: 479px) 100vw, (max-width: 991px) 50vw, 25vw" width="1476" src="./Product_files/5989714e76433a0001206b97_por5.jpg" srcset="https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b97_por5-p-500x375.jpeg 500w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b97_por5-p-800x600.jpeg 800w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b97_por5-p-1080x810.jpeg 1080w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b97_por5.jpg 1100w"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="dynamic-project-first w-col w-col-6 w-dyn-item">
                                <div>
                                    <div class="w-clearfix">
                                        <div class="project-content-style-3">
                                            <div class="category-name style-3">Landscaping</div>
                                            <h4 class="less-marg small-title">Praesent congue</h4>
                                            <div class="top-margin">
                                                <p>Aenean commodo ligula eget dolor. Aliquam lobortis. Phasellus volutpat, metus eget egestas mollis [...]</p>
                                            </div>
                                            <div class="learn-bottom"><a class="learn-more" href="http://sangs-fresh-project.webflow.io/project/praesent-congue">Learn More &gt;</a></div>
                                        </div>
                                        <a class="project-photo w-inline-block" href="http://sangs-fresh-project.webflow.io/project/praesent-congue"><img class="project-image-second" sizes="(max-width: 479px) 100vw, (max-width: 991px) 50vw, 25vw" width="1476" src="./Product_files/5989714e76433a0001206b95_port8.jpg" srcset="https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b95_port8-p-500x375.jpeg 500w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b95_port8-p-800x600.jpeg 800w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b95_port8-p-1080x810.jpeg 1080w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b95_port8.jpg 1100w"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="dynamic-project-first w-col w-col-6 w-dyn-item">
                                <div>
                                    <div class="w-clearfix">
                                        <div class="project-content-style-3">
                                            <div class="category-name style-3">Architecture</div>
                                            <h4 class="less-marg small-title">Suspendisse enim</h4>
                                            <div class="top-margin">
                                                <p>Aenean commodo ligula eget dolor. Aliquam lobortis. Phasellus volutpat, metus eget egestas mollis [...]</p>
                                            </div>
                                            <div class="learn-bottom"><a class="learn-more" href="http://sangs-fresh-project.webflow.io/project/suspendisse-enim">Learn More &gt;</a></div>
                                        </div>
                                        <a class="project-photo w-inline-block" href="http://sangs-fresh-project.webflow.io/project/suspendisse-enim"><img class="project-image-second" sizes="(max-width: 479px) 100vw, (max-width: 991px) 50vw, 25vw" width="1476" src="./Product_files/5989714e76433a0001206b9a_port9.jpg" srcset="https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b9a_port9-p-500x375.jpeg 500w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b9a_port9-p-800x600.jpeg 800w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b9a_port9-p-1080x810.jpeg 1080w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b9a_port9.jpg 1100w"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="dynamic-project-first w-col w-col-6 w-dyn-item">
                                <div>
                                    <div class="w-clearfix">
                                        <div class="project-content-style-3">
                                            <div class="category-name style-3">Architecture</div>
                                            <h4 class="less-marg small-title">Suspendisse faucibus</h4>
                                            <div class="top-margin">
                                                <p>Aenean commodo ligula eget dolor. Aliquam lobortis. Phasellus volutpat, metus eget egestas mollis [...]</p>
                                            </div>
                                            <div class="learn-bottom"><a class="learn-more" href="http://sangs-fresh-project.webflow.io/project/suspendisse-faucibus">Learn More &gt;</a></div>
                                        </div>
                                        <a class="project-photo w-inline-block" href="http://sangs-fresh-project.webflow.io/project/suspendisse-faucibus"><img class="project-image-second" sizes="(max-width: 479px) 100vw, (max-width: 991px) 50vw, 25vw" width="1476" src="./Product_files/5989714e76433a0001206b99_port3.jpg" srcset="https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b99_port3-p-500x375.jpeg 500w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b99_port3-p-800x600.jpeg 800w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b99_port3-p-1080x810.jpeg 1080w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b99_port3.jpg 1100w"></a>
                                    </div>
                                </div>
                            </div>
                            
                </div>
                <div class="w-tab-pane" data-w-tab="Tab 2">
                    <div class="w-dyn-list">
                        <div class="w-clearfix w-dyn-items w-row">
                            <div class="dynamic-project-first w-col w-col-6 w-dyn-item">
                                <div>
                                    <div class="w-clearfix">
                                        <div class="project-content-style-3">
                                            <div class="category-name style-3">Architecture</div>
                                            <h4 class="less-marg small-title">Suspendi eussse</h4>
                                            <div class="top-margin">
                                                <p>Aenean commodo ligula eget dolor. Aliquam lobortis. Phasellus volutpat, metus eget egestas mollis [...]</p>
                                            </div>
                                            <div class="learn-bottom"><a class="learn-more" href="http://sangs-fresh-project.webflow.io/project/suspendi-eussse">Learn More &gt;</a></div>
                                        </div>
                                        <a class="project-photo w-inline-block" href="http://sangs-fresh-project.webflow.io/project/suspendi-eussse"><img class="project-image-second" sizes="(max-width: 479px) 100vw, (max-width: 991px) 50vw, 25vw" width="1476" src="./Product_files/5989714e76433a0001206b96_port1.jpg" srcset="https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b96_port1-p-500x375.jpeg 500w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b96_port1-p-800x600.jpeg 800w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b96_port1-p-1080x810.jpeg 1080w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b96_port1.jpg 1100w"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="dynamic-project-first w-col w-col-6 w-dyn-item">
                                <div>
                                    <div class="w-clearfix">
                                        <div class="project-content-style-3">
                                            <div class="category-name style-3">Architecture</div>
                                            <h4 class="less-marg small-title">Suspendisse enim</h4>
                                            <div class="top-margin">
                                                <p>Aenean commodo ligula eget dolor. Aliquam lobortis. Phasellus volutpat, metus eget egestas mollis [...]</p>
                                            </div>
                                            <div class="learn-bottom"><a class="learn-more" href="http://sangs-fresh-project.webflow.io/project/suspendisse-enim">Learn More &gt;</a></div>
                                        </div>
                                        <a class="project-photo w-inline-block" href="http://sangs-fresh-project.webflow.io/project/suspendisse-enim"><img class="project-image-second" sizes="(max-width: 479px) 100vw, (max-width: 991px) 50vw, 25vw" width="1476" src="./Product_files/5989714e76433a0001206b9a_port9.jpg" srcset="https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b9a_port9-p-500x375.jpeg 500w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b9a_port9-p-800x600.jpeg 800w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b9a_port9-p-1080x810.jpeg 1080w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b9a_port9.jpg 1100w"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="dynamic-project-first w-col w-col-6 w-dyn-item">
                                <div>
                                    <div class="w-clearfix">
                                        <div class="project-content-style-3">
                                            <div class="category-name style-3">Architecture</div>
                                            <h4 class="less-marg small-title">Suspendisse faucibus</h4>
                                            <div class="top-margin">
                                                <p>Aenean commodo ligula eget dolor. Aliquam lobortis. Phasellus volutpat, metus eget egestas mollis [...]</p>
                                            </div>
                                            <div class="learn-bottom"><a class="learn-more" href="http://sangs-fresh-project.webflow.io/project/suspendisse-faucibus">Learn More &gt;</a></div>
                                        </div>
                                        <a class="project-photo w-inline-block" href="http://sangs-fresh-project.webflow.io/project/suspendisse-faucibus"><img class="project-image-second" sizes="(max-width: 479px) 100vw, (max-width: 991px) 50vw, 25vw" width="1476" src="./Product_files/5989714e76433a0001206b99_port3.jpg" srcset="https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b99_port3-p-500x375.jpeg 500w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b99_port3-p-800x600.jpeg 800w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b99_port3-p-1080x810.jpeg 1080w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b99_port3.jpg 1100w"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-tab-pane" data-w-tab="Tab 4">
                    <div class="w-dyn-list">
                        <div class="w-clearfix w-dyn-items w-row">
                            <div class="dynamic-project-first w-col w-col-6 w-dyn-item">
                                <div>
                                    <div class="w-clearfix">
                                        <div class="project-content-style-3">
                                            <div class="category-name style-3">Landscaping</div>
                                            <h4 class="less-marg small-title">Praesent congue</h4>
                                            <div class="top-margin">
                                                <p>Aenean commodo ligula eget dolor. Aliquam lobortis. Phasellus volutpat, metus eget egestas mollis [...]</p>
                                            </div>
                                            <div class="learn-bottom"><a class="learn-more" href="http://sangs-fresh-project.webflow.io/project/praesent-congue">Learn More &gt;</a></div>
                                        </div>
                                        <a class="project-photo w-inline-block" href="http://sangs-fresh-project.webflow.io/project/praesent-congue"><img class="project-image-second" sizes="(max-width: 479px) 100vw, (max-width: 991px) 50vw, 25vw" width="1476" src="./Product_files/5989714e76433a0001206b95_port8.jpg" srcset="https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b95_port8-p-500x375.jpeg 500w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b95_port8-p-800x600.jpeg 800w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b95_port8-p-1080x810.jpeg 1080w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b95_port8.jpg 1100w"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="dynamic-project-first w-col w-col-6 w-dyn-item">
                                <div>
                                    <div class="w-clearfix">
                                        <div class="project-content-style-3">
                                            <div class="category-name style-3">Landscaping</div>
                                            <h4 class="less-marg small-title">Praesent ac massa</h4>
                                            <div class="top-margin">
                                                <p>Aenean commodo ligula eget dolor. Aliquam lobortis. Phasellus volutpat, metus eget egestas mollis [...]</p>
                                            </div>
                                            <div class="learn-bottom"><a class="learn-more" href="http://sangs-fresh-project.webflow.io/project/praesent-ac-massa">Learn More &gt;</a></div>
                                        </div>
                                        <a class="project-photo w-inline-block" href="http://sangs-fresh-project.webflow.io/project/praesent-ac-massa"><img class="project-image-second" sizes="(max-width: 479px) 100vw, (max-width: 991px) 50vw, 25vw" width="1476" src="./Product_files/5989714e76433a0001206b98_port10.jpg" srcset="https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b98_port10-p-500x375.jpeg 500w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b98_port10-p-800x600.jpeg 800w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b98_port10-p-1080x810.jpeg 1080w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b98_port10.jpg 1100w"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-tab-pane" data-w-tab="Tab 6">
                    <div class="w-dyn-list">
                        <div class="w-clearfix w-dyn-items w-row">
                            <div class="dynamic-project-first w-col w-col-6 w-dyn-item">
                                <div>
                                    <div class="w-clearfix">
                                        <div class="project-content-style-3">
                                            <div class="category-name style-3">Painting</div>
                                            <h4 class="less-marg small-title">Curabitur vestibulum</h4>
                                            <div class="top-margin">
                                                <p>Aenean commodo ligula eget dolor. Aliquam lobortis. Phasellus volutpat, metus eget egestas mollis [...]</p>
                                            </div>
                                            <div class="learn-bottom"><a class="learn-more" href="http://sangs-fresh-project.webflow.io/project/curabitur-vestibulum">Learn More &gt;</a></div>
                                        </div>
                                        <a class="project-photo w-inline-block" href="http://sangs-fresh-project.webflow.io/project/curabitur-vestibulum"><img class="project-image-second" sizes="(max-width: 479px) 100vw, (max-width: 991px) 50vw, 25vw" width="1476" src="./Product_files/5989714e76433a0001206b94_port12.jpg" srcset="https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b94_port12-p-500x375.jpeg 500w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b94_port12-p-800x600.jpeg 800w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b94_port12-p-1080x810.jpeg 1080w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b94_port12.jpg 1100w"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="dynamic-project-first w-col w-col-6 w-dyn-item">
                                <div>
                                    <div class="w-clearfix">
                                        <div class="project-content-style-3">
                                            <div class="category-name style-3">Painting</div>
                                            <h4 class="less-marg small-title">Etiam utif</h4>
                                            <div class="top-margin">
                                                <p>Aenean commodo ligula eget dolor. Aliquam lobortis. Phasellus volutpat, metus eget egestas mollis [...]</p>
                                            </div>
                                            <div class="learn-bottom"><a class="learn-more" href="http://sangs-fresh-project.webflow.io/project/etiam-utif">Learn More &gt;</a></div>
                                        </div>
                                        <a class="project-photo w-inline-block" href="http://sangs-fresh-project.webflow.io/project/etiam-utif"><img class="project-image-second" sizes="(max-width: 479px) 100vw, (max-width: 991px) 50vw, 25vw" width="1476" src="./Product_files/5989714e76433a0001206ba0_port7.jpg" srcset="https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206ba0_port7-p-500x375.jpeg 500w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206ba0_port7-p-800x600.jpeg 800w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206ba0_port7-p-1080x810.jpeg 1080w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206ba0_port7.jpg 1100w"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="dynamic-project-first w-col w-col-6 w-dyn-item">
                                <div>
                                    <div class="w-clearfix">
                                        <div class="project-content-style-3">
                                            <div class="category-name style-3">Painting</div>
                                            <h4 class="less-marg small-title">Vestibulum dapibus</h4>
                                            <div class="top-margin">
                                                <p>Aenean commodo ligula eget dolor. Aliquam lobortis. Phasellus volutpat, metus eget egestas mollis [...]</p>
                                            </div>
                                            <div class="learn-bottom"><a class="learn-more" href="http://sangs-fresh-project.webflow.io/project/vestibulum-dapibus">Learn More &gt;</a></div>
                                        </div>
                                        <a class="project-photo w-inline-block" href="http://sangs-fresh-project.webflow.io/project/vestibulum-dapibus"><img class="project-image-second" sizes="(max-width: 479px) 100vw, (max-width: 991px) 50vw, 25vw" width="1476" src="./Product_files/5989714e76433a0001206b97_por5.jpg" srcset="https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b97_por5-p-500x375.jpeg 500w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b97_por5-p-800x600.jpeg 800w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b97_por5-p-1080x810.jpeg 1080w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b97_por5.jpg 1100w"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php
	include_once('footer.php');
	?>
	<div class="contact-pop-up" data-ix="hide-popup-on-initial-apper" style="opacity: 0; transform: scaleX(1.1) scaleY(1.1) scaleZ(1); display: none;">
        <a class="logo-popup w-hidden-tiny w-inline-block" href="http://sangs-fresh-project.webflow.io/projects/project-style-1#"></a>
        <div class="container-center uper w-container">
            <div class="top-title w-hidden-small w-hidden-tiny">
                <div class="align-center">
                    <div class="sub-text-title white">work with us</div>
                    <h1 class="heading-white title-top">Let's work together</h1></div>
            </div>
            <div>
                <div class="w-form">
                    <form data-name="Email Form 2" id="email-form-2" name="email-form-2">
                        <div class="w-row">
                            <div class="w-col w-col-4">
                                <input class="pop-up text-field-footer w-input" data-name="Name 3" id="name-3" maxlength="256" name="name" placeholder="Name" required="required" type="text">
                            </div>
                            <div class="w-col w-col-4">
                                <input class="pop-up text-field-footer w-input" data-name="Title" id="Title" maxlength="256" name="Title" placeholder="Title" type="text">
                            </div>
                            <div class="w-col w-col-4">
                                <input class="pop-up text-field-footer w-hidden-tiny w-input" data-name="Company" id="Company" maxlength="256" name="Company" placeholder="Company" required="required" type="text">
                            </div>
                        </div>
                        <div class="top-margin">
                            <div class="w-row">
                                <div class="w-col w-col-4">
                                    <input class="pop-up text-field-footer w-input" data-name="Email" id="Email-3" maxlength="256" name="Email" placeholder="Email" required="required" type="email">
                                </div>
                                <div class="w-col w-col-4">
                                    <input class="pop-up text-field-footer w-input" data-name="Phone Number" id="Phone-Number-2" maxlength="256" name="Phone-Number" placeholder="Phone Number" required="required" type="text">
                                </div>
                                <div class="w-col w-col-4">
                                    <input class="pop-up text-field-footer w-hidden-tiny w-input" data-name="Budget" id="Budget" maxlength="256" name="Budget" placeholder="Budget" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="top-margin">
                            <textarea class="pop-up text-field-footer w-hidden-tiny w-input" data-name="Project Details" id="Project-Details" maxlength="5000" name="Project-Details" placeholder="Project Details" required="required"></textarea>
                        </div>
                        <div class="top-margin">
                            <div class="align-center">
                                <input class="button-icon form-button w-button" data-wait="Please wait..." type="submit" value="Submit Details">
                            </div>
                        </div>
                    </form>
                    <div class="success-message w-form-done">
                        <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="error-message w-form-fail">
                        <div>Oops! Something went wrong while submitting the form</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="remove-button" data-ix="close-contact-popup-on-click" style="transition: all 0.3s ease 0s;"></div>
    </div>
	<?php
	include_once('GoTop.php');
	include_once('BottomScript.php');
	?>
    <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>

</html>