<?php if (is_active_sidebar('sidebar-left')) { ?> 
			<!-- For mobile views -->
				<div class="col-md-3 visible-xs-block" id="sidebar-left">
					<nav class="navbar">
							<?php do_action('before_sidebar'); ?>
								<div class="panel-group mobile-menu" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
										<a class="black" href="#entire-menu" role="button" data-toggle="collapse" data-parent="accordion" aria-expanded="false" aria-controls="entire-menu"><div class="panel-heading" role="tab" id="rest-of-menu">
											<h4 class="panel-title">
												<span class="sr-only">Toggle navigation</span>
												<span class="glyphicon glyphicon-menu-hamburger"></span>Menu</h4>
										</div></a>
										<div class="panel-collapse collapse" id="entire-menu" role="tabpanel" ariabelledby="rest-of-menu">
											<div class="panel-body">
												<!-- Inserted Main Menu -->	
													<div class="panel-group">
														<div class="panel panel-default">
															<a class="black" href="#"><div class="panel-heading">
																<h4 class="panel-title">Search</h4>
															</div></a>
														</div>
													</div>
													<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
														<div class="panel panel-default">
															<a class="black" href="#info" role="button" data-toggle="collapse" data-parent="accordion" aria-expanded="false" aria-controls="info"><div class="panel-heading" role="tab" id="description">
																<h4 class="panel-title">About Publication <span class="caret"></span></h4>
															</div></a>
															<div class="panel-collapse collapse" id="info" role="tabpanel" ariabelledby="description">
																<div class="panel-body">
																	<p>
																		Information about the dates the publication was activ and its goals, accomplishments, current relevance, etc. 
																	</p>
																	<p>
																		Lorem ipsum dolor sit amet, eu idque volutpat scribentur per, quo habeo vulputate eloquentiam eu. Elit tantas ceteros ad eam, eu fuisset platonem mea. Quod audiam saperet sea ea, vix cu inimicus intellegam. Zril graeco alienum usu ad. Ius ea euismod aliquando appellantur. Nostrud consulatu cum ne.
																	</p>
																</div>
															</div>
														</div>
													</div>
													<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
														<div class="panel panel-default">
															<a class="black" href="#contributors" role="button" data-toggle="collapse" data-parent="accordion" aria-expanded="false" aria-controls="issues"><div class="panel-heading" role="tab" id="authors">
																<h4 class="panel-title">
																	Author <span class="caret"></span>
																</h4>
															</div></a>
															<div class="panel-collapse collapse" id="contributors" role="tabpanel" ariabelledby="authors">
																		<div class="panel-body">
																			<ul>
																					<?php $tags = get_terms('contributors', 'orderby=slug&order=ASC');
																			$html = '';
																			foreach ( $tags as $tag ) {
																				$tag_link = get_tag_link( $tag->name );

																				$html .= "<li><a class='black' href=";
																				$html .= esc_url(home_url('contributors/'));
																				$html .= "{$tag->slug}";
																				$html .= " title='{$tag->name} Tag' class='{$tag->slug}'>";
																				$html .= "{$tag->name}</a></li>";
																			}

																			echo $html;
																			$html .= '';
																		?>
																				</ul>
																		</div>
																	</div>
																</div>
															</div>
																<div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
														<div class="panel panel-default">
															<a class="black" href="#issues" role="button" data-toggle="collapse" data-parent="accordion" aria-expanded="false" aria-controls="issues2"><div class="panel-heading" role="tab" id="volumes">
																<h4 class="panel-title">
																	Issue <span class="caret"></span>
																</h4>
															</div></a>
															<div class="panel-collapse collapse" id="issues" role="tabpanel" ariabelledby="volumes">
																		<div class="panel-body">
																			<ul>
																					<?php $tags = get_terms('issue-info');
																			$html = '';
																			foreach ( $tags as $tag ) {
																				$tag_link = get_tag_link( $tag->name );

																				$html .= "<li><a class='black' href=";
																				$html .= esc_url(home_url('/issue-info/'));
																				$html .= "{$tag->slug}";
																				$html .= " title='{$tag->name} Tag' class='{$tag->slug}'>";
																				$html .= "{$tag->name}</a></li>";
																			}

																			echo $html;
																			$html .= '';
																		?>
																				</ul>
																		</div>
																	</div>
																</div>
															</div>
															<div class="panel-group" id="accordion3" role="tablist" aria-multiselectable="true">
														<div class="panel panel-default">
															<a class="black" href="#category" role="button" data-toggle="collapse" data-parent="accordion" aria-expanded="false" aria-controls="issues3"><div class="panel-heading" role="tab" id="topics">
																<h4 class="panel-title">
																	Category <span class="caret"></span>
																</h4>
															</div></a>
															<div class="panel-collapse collapse" id="category" role="tabpanel" ariabelledby="topics">
																		<div class="panel-body">
																			<ul>
																					<?php $tags = get_terms('category');
																		$html = '';
																		foreach ( $tags as $tag ) {
																			$tag_link = get_tag_link( $tag->name );

																			$html .= "<li><a class='black' href=";
																			$html .= esc_url(home_url('/category/'));
																			$html .= "{$tag->slug}";
																			$html .= " title='{$tag->name} Tag' class='{$tag->slug}'>";
																			$html .= "{$tag->name}</a></li>";
																		}

																		echo $html;
																		$html .= '';
																		?>
																				</ul>
																		</div>
																	</div>
																</div>
															</div>
												<!-- End of inserted Main Menu -->
														</div>
													</div>
												</div>
											</div>
												<!--<?php dynamic_sidebar('sidebar-left'); ?>-->
										</nav>
									</div>


<!-- For Desktop views -->
				<div class="col-md-3 hidden-xs" id="sidebar-left">
					<nav class="navbar">
							<?php do_action('before_sidebar'); ?>
								<div class="panel-group">
									<div class="panel panel-default">
										<a class="black" href="#"><div class="panel-heading">
											<h4 class="panel-title">Search</h4>
										</div></a>
									</div>
								</div>
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
										<a class="black" href="#info2" role="button" data-toggle="collapse" data-parent="accordion" aria-expanded="false" aria-controls="info"><div class="panel-heading" role="tab" id="description2">
											<h4 class="panel-title">About Publication <span class="caret"></span></h4>
										</div></a>
										<div class="panel-collapse collapse" id="info2" role="tabpanel" ariabelledby="description2">
											<div class="panel-body">
												<p>
													Information about the dates the publication was activ and its goals, accomplishments, current relevance, etc. 
												</p>
												<p>
													Lorem ipsum dolor sit amet, eu idque volutpat scribentur per, quo habeo vulputate eloquentiam eu. Elit tantas ceteros ad eam, eu fuisset platonem mea. Quod audiam saperet sea ea, vix cu inimicus intellegam. Zril graeco alienum usu ad. Ius ea euismod aliquando appellantur. Nostrud consulatu cum ne.
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
										<a class="black" href="#contributors2" role="button" data-toggle="collapse" data-parent="accordion" aria-expanded="false" aria-controls="issues"><div class="panel-heading" role="tab" id="authors2">
											<h4 class="panel-title">
												Author <span class="caret"></span>
											</h4>
										</div></a>
										<div class="panel-collapse collapse" id="contributors2" role="tabpanel" ariabelledby="authors2">
					         				<div class="panel-body">
					         					<ul>
									            	<?php $tags = get_terms('contributors', 'orderby=slug&order=ASC');
														$html = '';
														foreach ( $tags as $tag ) {
															$tag_link = get_tag_link( $tag->name );
																	
															$html .= "<li><a class='black' href=";
															$html .= esc_url(home_url('contributors/'));
															$html .= "{$tag->slug}";
															$html .= " title='{$tag->name} Tag' class='{$tag->slug}'>";
															$html .= "{$tag->name}</a></li>";
														}
														
														echo $html;
														$html .= '';
													?>
									            </ul>
					         				</div>
					         			</div>
					         		</div>
					         	</div>
					            <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
										<a class="black" href="#issues2" role="button" data-toggle="collapse" data-parent="accordion" aria-expanded="false" aria-controls="issues2"><div class="panel-heading" role="tab" id="volumes2">
											<h4 class="panel-title">
												Issue <span class="caret"></span>
											</h4>
										</div></a>
										<div class="panel-collapse collapse" id="issues2" role="tabpanel" ariabelledby="volumes2">
					         				<div class="panel-body">
					         					<ul>
									              <?php $tags = get_terms('issue-info');
														$html = '';
														foreach ( $tags as $tag ) {
															$tag_link = get_tag_link( $tag->name );
																	
															$html .= "<li><a class='black' href=";
															$html .= esc_url(home_url('/issue-info/'));
															$html .= "{$tag->slug}";
															$html .= " title='{$tag->name} Tag' class='{$tag->slug}'>";
															$html .= "{$tag->name}</a></li>";
														}
														
														echo $html;
														$html .= '';
													?>
									            </ul>
					         				</div>
					         			</div>
					         		</div>
					         	</div>
					         	<div class="panel-group" id="accordion3" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
										<a class="black" href="#category2" role="button" data-toggle="collapse" data-parent="accordion" aria-expanded="false" aria-controls="issues3"><div class="panel-heading" role="tab" id="topics2">
											<h4 class="panel-title">
												Category <span class="caret"></span>
											</h4>
										</div></a>
										<div class="panel-collapse collapse" id="category2" role="tabpanel" ariabelledby="topics2">
					         				<div class="panel-body">
					         					<ul>
									              <?php $tags = get_terms('category');
													$html = '';
													foreach ( $tags as $tag ) {
														$tag_link = get_tag_link( $tag->name );
																
														$html .= "<li><a class='black' href=";
														$html .= esc_url(home_url('/category/'));
														$html .= "{$tag->slug}";
														$html .= " title='{$tag->name} Tag' class='{$tag->slug}'>";
														$html .= "{$tag->name}</a></li>";
													}
													
													echo $html;
													$html .= '';
													?>
									            </ul>
					         				</div>
					         			</div>
					         		</div>
					         	</div>
					         
							<!--<?php dynamic_sidebar('sidebar-left'); ?>-->
					</nav>
				</div>
			
<?php } ?> 