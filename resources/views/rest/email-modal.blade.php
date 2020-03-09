<transition name="emailform" enter-active-class="scale-in-top" leave-active-class="scale-out-ver-top">
	<form
		class="container-fluid bg-transparent-light"
		style="z-index: 12; position: fixed; top: 0px; height: 100vh;"
		v-if="sendemail"
		action="{{ route('email') }}"
		method="post">
		@csrf

		<div class="container d-flex justify-content-start align-items-center flex-column" style="min-width: 80%; width: 300px;">

			<div class="form-group">
				<label for="to">@lang('common.tosendemail')</label>
				<input name="to" type="email" class="form-control" id="to" aria-describedby="emailHelpId" />
				<small id="emailHelpId" class="form-text text-muted">@lang('common.email-help-text')</small>
			</div>

			<div class="form-group">
				<label for="subject">@lang('common.emailsubject')</label>
				<input name="subject" class="form-control" id="subject" />
			</div>

			<div class="form-group">
				<label for="content">@lang('common.emailcontent')</label>
				<textarea name="content" class="form-control" id="content" rows="3"></textarea>
			</div>

			<div class="form-group">
				<span class="btn btn-group">
					<input type="button" @click="toggleSendEmail" class="btn btn-secondary" value="@lang('common.close')" />
					<input type="submit" value="@lang('common.send')" class="btn btn-primary" />
				</span>
			</div>
		</div>

	</form>
</transition>