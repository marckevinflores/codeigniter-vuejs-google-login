
//show google login popup window
Vue.component('google-login', {
  template: '#googleBtn',
  beforeCreate () {
    window.gapi.load('auth2', () => {
      const auth2 = window.gapi.auth2.init({
        client_id: 'Your-Client-ID' //you must create your google api project
      })
      auth2.attachClickHandler(this.$refs.signinBtn, {}, googleUser => {
        this.$emit('done', googleUser)
      }, error => console.log('You Exiting'))
    })
  }
})


var v = new Vue({
    el:"#app",
    data:{

    },
    methods:{
     
         getGUserLogIn(user){
			   const params = new URLSearchParams();
            var profile = user.getBasicProfile()
            params.append('oauth_uid', profile.getId());
            params.append('oauth_provider', 'Google');
            params.append('first_name', profile.getGivenName());
            params.append('last_name', profile.getFamilyName());
            params.append('picture_url', profile.getImageUrl());
            params.append('email', profile.getEmail());
			  axios.post('http://localhost/codeigniter_vue_google_login/welcome/google_user_register', params).then(function(response){
                if(response.data.success){
//                    console.log(response.data.user_id)
                 window.location.href = response.data.redirect
                }
            })
    },
        }
    
})

