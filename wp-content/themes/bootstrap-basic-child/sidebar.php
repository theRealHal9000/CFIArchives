<?php if (is_active_sidebar('sidebar-sram')) { ?> 
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
													<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
														<div class="panel panel-default">
															<a class="black" href="#info" role="button" data-toggle="collapse" data-parent="accordion" aria-expanded="false" aria-controls="info"><div class="panel-heading" role="tab" id="description">
																<h4 class="panel-title">What is SRAM? <span class="caret"></span></h4>
															</div></a>
															<div class="panel-collapse collapse" id="info" role="tabpanel" ariabelledby="description">
																<div class="panel-body">
																	<p>
																		The purpose of the Scientific Review of Alternative Medicine is to apply the best tools of science and reason to determine whether hypotheses are valid and treatments are effective. It will reject no claims because it fits, or fails to fit, some paradigm. It will simply seek justified answers to two questions: "Is it true?" and "Does this treatment work?"
																	</p>
																	<p>
																		The publication of SRAM has been endorsed by the Commission for Scientific Medicine and Mental Health, a panel that includes prominent physicians, scientists, and Nobel prizewinners.
																	</p>
																</div>
															</div>
														</div>
													</div>
													<div class="panel-group">
														<div class="panel panel-default">
															<a class="black" href="<?php echo esc_url(home_url('/about/')); ?>"><div class="panel-heading">
																<h4 class="panel-title">About</h4>
															</div></a>
														</div>
													</div>
													<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
														<div class="panel panel-default">
															<a class="black" href="#contactus" role="button" data-toggle="collapse" data-parent="accordion" aria-expanded="false" aria-controls="contactus"><div class="panel-heading" role="tab" id="contact">
																<h4 class="panel-title">Contact Us <span class="caret"></span></h4>
															</div></a>
															<div class="panel-collapse collapse" id="contactus" role="tabpanel" ariabelledby="contact">
																<div class="panel-body">
																	<p>
																		<span class="panel-sub-heading allred">Editorial Inquiries</span><br />
																		<strong>Wallace Sampson, Editor</strong><br />
																		Email: <a class="red" href="mailto:wisampson@aol.com">wisampson@aol.com</a>
																	</p>
																	<p>
																		<span class="panel-sub-heading allred">General Inquiries</span><br />
																		If you have questions about the <em>Scientific Review of Alternative Medicine</em>, please contact: <a class="red" href="mailto:info@centerforinquiry.net">info@centerforinquiry.net</a>
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
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
										<a class="black" href="#info2" role="button" data-toggle="collapse" data-parent="accordion" aria-expanded="false" aria-controls="info"><div class="panel-heading" role="tab" id="description2">
											<h4 class="panel-title">What is SRAM? <span class="caret"></span></h4>
										</div></a>
										<div class="panel-collapse collapse" id="info2" role="tabpanel" ariabelledby="description2">
											<div class="panel-body">
												<p>
													The purpose of the Scientific Review of Alternative Medicine is to apply the best tools of science and reason to determine whether hypotheses are valid and treatments are effective. It will reject no claims because it fits, or fails to fit, some paradigm. It will simply seek justified answers to two questions: "Is it true?" and "Does this treatment work?"
												</p>
												<p>
													The publication of SRAM has been endorsed by the Commission for Scientific Medicine and Mental Health, a panel that includes prominent physicians, scientists, and Nobel prizewinners.
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="panel-group">
									<div class="panel panel-default">
										<a class="black" href="<?php echo esc_url(home_url('/about/')); ?>"><div class="panel-heading">
											<h4 class="panel-title">About</h4>
										</div></a>
									</div>
								</div>
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
										<a class="black" href="#contactus2" role="button" data-toggle="collapse" data-parent="accordion" aria-expanded="false" aria-controls="contactus"><div class="panel-heading" role="tab" id="contact2">
											<h4 class="panel-title">Contact Us <span class="caret"></span></h4>
										</div></a>
										<div class="panel-collapse collapse" id="contactus2" role="tabpanel" ariabelledby="contact2">
											<div class="panel-body">
												<p>
													<span class="panel-sub-heading allred">Editorial Inquiries</span><br />
													<strong>Wallace Sampson, Editor</strong><br />
													Email: <a class="red" href="mailto:wisampson@aol.com">wisampson@aol.com</a>
												</p>
												<p>
													<span class="panel-sub-heading allred">General Inquiries</span><br />
													If you have questions about the <em>Scientific Review of Alternative Medicine</em>, please contact: <a class="red" href="mailto:info@centerforinquiry.net">info@centerforinquiry.net</a>
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