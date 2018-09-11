<!-- Comments -->
<div class="similar_posts">
	<!-- Post Comment -->
	<div class="post_comment">
		<div class="post_comment_title">Post Comment</div>
		<div class="row">
			<div class="col-xl-8">
				<div class="post_comment_form_container">
					<form action="{{ route('store.comment', ['category' => $post->categories()->first()->slug, 'slug' => $post->slug, 'post_id' => $post->id ]) }}" method="post">
						@csrf
						<input type="text" class="comment_input comment_input_name" placeholder="Your Name" required="required" name="author">
						<input type="email" class="comment_input comment_input_email" placeholder="Your Email" required="required" name="author_email">
						<textarea class="comment_text" placeholder="Your Comment" required="required" name="content"></textarea>
						<button type="submit" class="comment_button">Post Comment</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Comments -->
	<div class="comments">
		<div class="comments_title">Comments <span>(12)</span></div>
		<div class="row">
			<div class="col-xl-8">
				<div class="comments_container">
					<ul class="comment_list">
						<li class="comment">
							<div class="comment_body">
								<div class="comment_panel d-flex flex-row align-items-center justify-content-start">
									<div class="comment_author_image"><div><img src="images/comment_author_1.jpg" alt=""></div></div>
									<small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
									<button type="button" class="reply_button ml-auto">Reply</button>
								</div>
								<div class="comment_content">
									<p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened.</p>
								</div>
							</div>

							<!-- Reply -->
							<ul class="comment_list">
								<li class="comment">
									<div class="comment_body">
										<div class="comment_panel d-flex flex-row align-items-center justify-content-start">
											<div class="comment_author_image"><div><img src="images/comment_author_2.jpg" alt=""></div></div>
											<small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
											<button type="button" class="reply_button ml-auto">Reply</button>
										</div>
										<div class="comment_content">
											<p>Nulla facilisi. Aenean porttitor quis tortor id tempus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus molestie varius tincidunt. Vestibulum congue sed libero ac sodales.</p>
										</div>
									</div>

									<!-- Reply -->
									<ul class="comment_list">
										
									</ul>
								</li>
							</ul>
						</li>
						<li class="comment">
							<div class="comment_body">
								<div class="comment_panel d-flex flex-row align-items-center justify-content-start">
									<div class="comment_author_image"><div><img src="images/comment_author_1.jpg" alt=""></div></div>
									<small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
									<button type="button" class="reply_button ml-auto">Reply</button>
								</div>
								<div class="comment_content">
									<p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened.</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>	
	</div>
</div>