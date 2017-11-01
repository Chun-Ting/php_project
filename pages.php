 <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                

                
				<?php
                // 顯示的頁數範圍
						 //若已經有翻頁，將頁數更新

                $range = 5;
                
                // 若果正在顯示第一頁，無需顯示「前一頁」連結
                if ($num_pages > 1) {
                     // 前一頁的頁數
                    $prevpage = $num_pages - 1;
                    // 使用 < 連結回到前一頁
					
					echo "<li>
                        <a href={$_SERVER['PHP_SELF']}?page=".$prevpage.">&laquo;</a>
                    </li>";
					
                  
                } // end if
                 
                // 顯示當前分頁鄰近的分頁頁數
                for ($x = (($num_pages - $range) - 1); $x < (($num_pages + $range) + 1); $x++) {
                    // 如果這是一個正確的頁數...
                    if (($x > 0) && ($x <= $total_pages)) {
                        // 如果這一頁等於當前頁數...
                        if ($x == $num_pages) {
                            // 不使用連結, 但用高亮度顯示
							echo "<li class='active'>
										<a href='#'>".$x."</a>
									</li>";
                          
                            // 如果這一頁不是當前頁數...
                        } else {
                            // 顯示連結
							echo "<li >
										<a href={$_SERVER['PHP_SELF']}?page=".$x.">".$x."</a>
									</li>";
                           
                        } // end else
                    } // end if
                } // end for
                 
                // 如果不是最後一頁, 顯示跳往下一頁及最後一頁的連結
                if ($num_pages != $total_pages) {
                    // 下一頁的頁數
                    $nextpage = $num_pages + 1;
                    // 顯示跳往下一頁的連結
					echo "<li>
                        <a href={$_SERVER['PHP_SELF']}?page=".$nextpage.">&raquo;</a>
                    </li>";
                   } // end if
                ?>                
                
                
                
                
                
                
                
                
                
                
                
<!--                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>-->
                </ul>
            </div>
        </div>
        <!-- /.row -->