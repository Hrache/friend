<template>
	<transition
		:delay="Math.random() * 2000" appear
		:appear-active-class="animName">
		<a style="text-decoration: none;" class="col-sm-12 col-md-6 col-lg-4 col-xl-4 text-dark p-3 rounded d-flex justify-content-start bg-hover pointer" @click="clickSound()" :href="category.cat_id ? '#' : url">
			<header>
				<img width="128" class="image-fluid m-2"
					:src="imgpath + (category.image || 'dummy.jpg')"
					:title="category.slag"
					:alt="category.slag" />
			</header>

			<main class="p-2">
				<h3 class="h3" style="text-transform: capitalize;">
					{{ category.slag }}
				</h3>
				<p class="p-1">{{ category.title }}</p>
			</main>
		</a>
	</transition>
</template>

<script>
function anims() {
	return ["slide-in-blurred-left", "flicker-in-1", "scale-in-left"];
}

module.exports = {
	props: ["category", "imgpath", "url", "vuepath"],
	data() {
		return {
			animName: anims()[Math.round(Math.random()) * (anims().length - 1)]
		}
	},
	methods: {
		clickSound() {
			let snd = new Audio(this.vuepath + "snd/click.mp3");
			snd.load();
			snd.play();
		}
	}
};
</script>

<style>
.bg-hover:hover{background-color:#fee}
.pointer{cursor:pointer}
.scale-in-left{-webkit-animation:scale-in-left .5s cubic-bezier(.25,.46,.45,.94) both;animation:scale-in-left .5s cubic-bezier(.25,.46,.45,.94) both}
.slide-in-blurred-left{-webkit-animation:slide-in-blurred-left .6s cubic-bezier(.23,1,.32,1) both;animation:slide-in-blurred-left .6s cubic-bezier(.23,1,.32,1) both}
.flicker-in-1{-webkit-animation:flicker-in-1 2s linear both;animation:flicker-in-1 2s linear both}
@-webkit-keyframes flicker-in-1{0%{opacity:0}10%{opacity:0}10.1%{opacity:1}10.2%{opacity:0}20%{opacity:0}20.1%{opacity:1}20.6%{opacity:0}30%{opacity:0}30.1%{opacity:1}30.5%{opacity:1}30.6%{opacity:0}45%{opacity:0}45.1%{opacity:1}50%{opacity:1}55%{opacity:1}55.1%{opacity:0}57%{opacity:0}57.1%{opacity:1}60%{opacity:1}60.1%{opacity:0}65%{opacity:0}65.1%{opacity:1}75%{opacity:1}75.1%{opacity:0}77%{opacity:0}77.1%{opacity:1}85%{opacity:1}85.1%{opacity:0}86%{opacity:0}86.1%{opacity:1}100%{opacity:1}}
@keyframes flicker-in-1{0%{opacity:0}10%{opacity:0}10.1%{opacity:1}10.2%{opacity:0}20%{opacity:0}20.1%{opacity:1}20.6%{opacity:0}30%{opacity:0}30.1%{opacity:1}30.5%{opacity:1}30.6%{opacity:0}45%{opacity:0}45.1%{opacity:1}50%{opacity:1}55%{opacity:1}55.1%{opacity:0}57%{opacity:0}57.1%{opacity:1}60%{opacity:1}60.1%{opacity:0}65%{opacity:0}65.1%{opacity:1}75%{opacity:1}75.1%{opacity:0}77%{opacity:0}77.1%{opacity:1}85%{opacity:1}85.1%{opacity:0}86%{opacity:0}86.1%{opacity:1}100%{opacity:1}}
@-webkit-keyframes scale-in-left{0%{-webkit-transform:scale(0);transform:scale(0);-webkit-transform-origin:0 50%;transform-origin:0 50%;opacity:1}100%{-webkit-transform:scale(1);transform:scale(1);-webkit-transform-origin:0 50%;transform-origin:0 50%;opacity:1}}
@keyframes scale-in-left{0%{-webkit-transform:scale(0);transform:scale(0);-webkit-transform-origin:0 50%;transform-origin:0 50%;opacity:1}100%{-webkit-transform:scale(1);transform:scale(1);-webkit-transform-origin:0 50%;transform-origin:0 50%;opacity:1}}
@-webkit-keyframes slide-in-blurred-left{0%{-webkit-transform:translateX(-1000px) scaleX(2.5) scaleY(.2);transform:translateX(-1000px) scaleX(2.5) scaleY(.2);-webkit-transform-origin:100% 50%;transform-origin:100% 50%;-webkit-filter:blur(40px);filter:blur(40px);opacity:0}100%{-webkit-transform:translateX(0) scaleY(1) scaleX(1);transform:translateX(0) scaleY(1) scaleX(1);-webkit-transform-origin:50% 50%;transform-origin:50% 50%;-webkit-filter:blur(0);filter:blur(0);opacity:1}}
@keyframes slide-in-blurred-left{0%{-webkit-transform:translateX(-1000px) scaleX(2.5) scaleY(.2);transform:translateX(-1000px) scaleX(2.5) scaleY(.2);-webkit-transform-origin:100% 50%;transform-origin:100% 50%;-webkit-filter:blur(40px);filter:blur(40px);opacity:0}100%{-webkit-transform:translateX(0) scaleY(1) scaleX(1);transform:translateX(0) scaleY(1) scaleX(1);-webkit-transform-origin:50% 50%;transform-origin:50% 50%;-webkit-filter:blur(0);filter:blur(0);opacity:1}}
</style>
