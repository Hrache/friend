<transition name="emailform" enter-active-class="scale-in-top" leave-active-class="scale-out-ver-top">
<section
	class="container bg-transparent-light d-flex align-items-center"
	style="z-index: 12; position: fixed; left: 0px; top: 0px; min-height: 100vh; max-width: 100vw;"
	v-if="sendemail">
	<form action="{{ route('email') }}" method="post">
		@csrf
		<div class="row">

			<div class="form-group col-sm-12 col-md-9 col-lg-8 col-xl-8 offset-md-2 offset-lg-3 offset-xl-3">
				<label for="to">@lang('common.tosendemail')</label>
				<input name="to" type="email" class="form-control" id="to" aria-describedby="emailHelpId" />
				<small id="emailHelpId" class="form-text text-muted">@lang('common.email-help-text')</small>
			</div>

			<div class="form-group col-sm-12 col-md-9 col-lg-8 col-xl-8 offset-md-2 offset-lg-3 offset-xl-3">
				<label for="subject">@lang('common.emailsubject')</label>
				<input name="subject" class="form-control" id="subject" />
			</div>

			<div class="form-group col-sm-12 col-md-9 col-lg-8 col-xl-8 offset-md-2 offset-lg-3 offset-xl-3">
				<label for="content">@lang('common.emailcontent')</label>
				<textarea name="content" class="form-control" id="content" rows="3"></textarea>
			</div>

			<div class="form-group col-sm-12 col-md-9 col-lg-8 col-xl-8 offset-md-2 offset-lg-3 offset-xl-3">
				<span class="btn btn-group">
					<input type="button" @click="toggleSendEmail" class="btn btn-secondary" value="@lang('common.close')" />
					<input type="submit" value="@lang('common.send')" class="btn btn-primary" />
				</span>
			</div>

		</div>

	</form>
</section>
</transition>