<template>

      <!-- footer-area-start -->
      <footer>
         <div class="tp-footer-2 lightblue-bg">
            <div class="tp-footer-main pt-70 pb-55">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-footer-widget tp-footer-2-col-1 mb-30">
                           <div class="tp-footer-widget-logo mb-20 tp-header-logo">
                              <a href="#"><img :src="setting?.setting_logo_url" alt=""></a>
                           </div>
                           <div class="tp-footer-widget-content">
                              <p>Expert-led courses designed to enhance your skills and knowledge.
<br/> Engaging, hands-on learning experiences to help you succeed in your career.</p>
                           </div>
                           <div class="tp-footer-contact">
                              <div class="tp-footer-btn">
                                 <a class="tp-btn-round" :href="setting?.whatsapp">Contact Us 
                                    <span>
                                       <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M8.71533 1L13 5.28471L8.71533 9.56941" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M1 5.28467H12.88" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>
                                    </span>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-4 col-md-6 ">
                        <div class="tp-footer-widget tp-footer-2-col-2 mb-30">
                           <h4 class="tp-footer-widget-title mb-15">About</h4>
                           <div class="tp-footer-widget-link">
                              <ul>
                                 <li><router-link to="/about-us">About Us</router-link></li>
                                 <li><router-link to="/courses">Training Courses</router-link></li>
                                 <li><a href="event.html">Events</a></li>
                                 <li><router-link to="contact-us">Contact Us</router-link></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="p-footer-widget tp-footer-2-col-4 mb-30">
                           <h4 class="tp-footer-widget-title mb-20">Our Newsletter</h4>
                           <div class="tp-footer-contact">
                              <span>Got Questions? Call us</span>
                              <a href="tel:012345678">{{setting?.phone}}</a>
                              <span >Address : </span>
                              <a class="mt-2">{{setting?.address}}</a>
                           </div>
                           <div class="tp-footer-contact-mail mb-20">
                              <a href="mailto:acadia@gmail.com">
                                 <span>
                                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M1 5C1 2.2 2.6 1 5 1H13C15.4 1 17 2.2 17 5V10.6C17 13.4 15.4 14.6 13 14.6H5" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M13 5.40039L10.496 7.40015C9.672 8.05607 8.32 8.05607 7.496 7.40015L5 5.40039" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M1 11.4004H5.8" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M1 8.19922H3.4" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                 </span> 
                                 {{setting?.email}}</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tp-footer-bottom lightblue-bg">
               <div class="container">
                  <div class="row ">
                     <div class="col-lg-3 ">
                        <div class="tp-footer-bottom-social text-center">
                           <a :href="setting?.facebook"><i class="fa-brands fa-facebook-f"></i></a>
                           <a :href="setting?.instagram"><i class="fa-brands fa-instagram"></i></a>
                           <a :href="setting?.whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-5 ">
                        <div class="tp-footer-copyright text-start text-center">
                           <span>© 2024 <a href="#">{{setting?.site_name}}</a>. All rights reserved.</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- footer-area-end -->

</template>

<script>

export default {
  name: 'Footer',
  data() {
    return {
      setting: [],
    };
  },
  created() {
    this.fetchSettingDetails();
  },
  methods: {
    async fetchSettingDetails() {
      try {
        const response = await fetch(`/api/get_setting/1`);
        const result = await response.json();
        
        if (result.status === 200) {
          this.setting = result.data;
          console.log("Setting Logo URL:", this.setting.setting_logo_url);
        } else {
          console.error(result.message);
        }
      } catch (error) {
        console.error('Error fetching setting details:', error);
      }
    },
  },
}
</script>

<style scoped>
/* Add your styles here if needed */
</style>
