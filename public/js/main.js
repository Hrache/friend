var headerVue = new Vue({
  el: "#pageheader",
  data: {
    sendemail: false,
    messages: false,
    logoutmodal: false
  },
  methods: {
    toggleSendEmail() {
      this.sendemail = !this.sendemail;
    },
    logout(ev) {
      logout(ev);
		}
	},
	mounted() {
		if (window.loggedin) {
			var check, sessionCheckIntervalCallback, logoutAnchor;

			try {
				logoutAnchor = document.querySelector('#logoutanchor');

				if (!logoutAnchor) throw "Some DOM element was missing";

				// Callback function for timeout method
				sessionCheckIntervalCallback = function(check, timeIntervalCallback)
				{
					axios
						.post(window.sessionCheckURL)
						.catch(function(error) {
							headerVue.logoutmodal = true;
						});
				};

				check = setInterval(
					sessionCheckIntervalCallback,
					window.sessionLifetime,
					check,
					sessionCheckIntervalCallback
				);
			}
			catch (errr) {
				alert(errr.message);
			}
		}
	}
});