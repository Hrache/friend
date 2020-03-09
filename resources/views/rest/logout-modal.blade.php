<transition leave-active-class="scale-out-ver-top">
	<section class="container text-light bg-dark position-fixed p-3" id="logout-modal" v-if="logoutmodal" style="z-index: 3;">
		<header class="p-2 d-flex justify-content-end">
			<button type="button" class="btn btn-danger" @click="location.reload();">@lang('common.close')</button>
		</header>
		<h2 class="display-4">@lang('common.loggedout')</h2>
	</section>
</transition>