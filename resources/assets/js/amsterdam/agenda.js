require('./bootstrap');
var timeout = null;

window.Vue = require('vue');

Vue.component(
    'agenda-session',
    require('../components/AgendaSession.vue')
);

Vue.component(
    'agenda-search',
    require('../components/AgendaSearch.vue')
);

 var spVue = new Vue({
  el: '#AgendaSection',

  data: {
    trackList: {},
    trackData: {
      event: {
        first_day: {
          textFormat: ''
        },
        second_day: {
          textFormat: ''
        }        
      }
    },
    DesktopAgendaToggle: 0,
    dayoneset: true,
    daytwoset: true,
    agendaTracks: [1, 2, 3, 15, 16, 7, 5, 6, 10, 11, 9, 13, 12, 17, 18],
    pointer: 0,
    searchField: '',
    serachResults: null
  },



  methods: {

    doSearch(){
       clearTimeout(timeout);
       var thiss = this;

           timeout = setTimeout(function () {
            axios.get('/api/search/agenda/'+thiss.searchField).then(function (response){
                 thiss.serachResults = response.data;
                 thiss.$refs.searchsessions.sessionSearch(thiss.serachResults);
            });
             
    }, 500);

      
    },

    changesessions(trackId){
       this.DesktopAgendaToggle = 0;

      window.$(".BreakoutDesktop .BreakoutDesktopIcon").removeClass("ActiveBreakoutIcon");
      window.$(".BreakoutDesktop .TooltipContent").removeClass("ActiveTooltipContent"); 

        
    //Fade out the break-out panel
    window.$('#SessionCategoriesDesktop').fadeOut(); 
    window.$('[data-desktopstage='+trackId+']').children(".BreakoutDesktopIcon").addClass("ActiveBreakoutIcon");
    window.$('[data-desktopstage='+trackId+']').children(".TooltipContent").addClass("ActiveTooltipContent"); 

    this.pointer = this.agendaTracks.indexOf(trackId);            


       
        for(let i = 0; i < this.tracklist.length; i++) {

            if (this.tracklist[i].id == trackId) {

                setTimeout(()=>{
                  this.trackData = this.tracklist[i];
                  this.$refs.dayone.switchSession(this.trackData);
                  this.$refs.daytwo.switchSession(this.trackData);   
                }, 350);
              
                break;
            }
        }


              
        


    },

    nextItem() {
        this.pointer = this.pointer + 1; // increase i by one
        this.pointer = this.pointer % this.agendaTracks.length; // if we've gone too high, start from `0` again
        this.changesessions(this.agendaTracks[this.pointer]); // give us back the item of where we are now
    },

    prevItem() {
        if (this.pointer === 0) { // i would become 0
            this.pointer = this.agendaTracks.length; // so put it at the other end of the array
        }
        this.pointer = this.pointer - 1; // decrease by one
        this.changesessions(this.agendaTracks[this.pointer]);
    }

  
  },
  events: {

   stateChanged: ()=> {
      this.DesktopAgendaToggle = 1;
   }

  },
  mounted(){
    //On load we get the agenda data from the controller via Jef's Js emmiter <3
    this.tracklist = trackData;
    this.trackData = trackData[0];

    //Then we pass the session data to our child component
    this.$emit('loadSessions', this.trackData);
    document.getElementById('MiscScripts').remove();
    document.getElementById('DesktopAgenda').classList.remove("invisibleTrack");
    // this.invisibleTrigger = "invisibleTrack";
     this.DesktopAgendaToggle = 1;
  }


});


//Normal JS goes here
 (function () {
    $.fn.visible = function(partial) {
    
        var $t            = $(this),
            $w            = $(window),
            viewTop       = $w.scrollTop(),
            viewBottom    = viewTop + $w.height(),
            _top          = $t.offset().top,
            _bottom       = _top + $t.height(),
            compareTop    = partial === true ? _bottom : _top,
            compareBottom = partial === true ? _top : _bottom;
      
        return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

      };
  })();

  $(function(){

    var rmv = $("#rmv");

    $(window).scroll(function() {
      
      if ($(window).width() > 1920) {
          if ($(this).scrollTop() >=1200) {
            $('.cnt').addClass("fxd");

          }else{
            $('.cnt').removeClass("fxd");
            $('.cnt').removeClass("opa");
          }
        } else{
          if ($(this).scrollTop() >= 500) {
            $('.cnt').addClass("fxd");

          }else{
            $('.cnt').removeClass("fxd");
            $('.cnt').removeClass("opa");
          }
        }            
    });
    $(window).scroll(function(event) {
              rmv.each(function(i, rmv) {
                var rmv = $(rmv);
                if (rmv.visible(true)) {
                  $('.cnt').removeClass("fxd");
                }
              });
            });                
        
 });


    $('body').on('click', '.SessionContent', function (event) {
        $(this).find(".fa").toggleClass("OpenedSession");
        $(this).siblings(".SessionInfo").slideToggle(200);
    });


/* Navigation Mobile */
window.$(document).ready(function() {
    window.$('body').on('click', '.BreakoutHeaderMobile', function(e) {   
        var stage = window.$(this).data("mobilestage");
        
        var state = window.$('.BreakoutMobile[data-mobilestage="'+stage+'"]').data('currstate');
        
        switch(state){
            case 0:
              window.$('.BreakoutCollapsibleMobile[data-mobilecontstage="'+stage+'"]').slideToggle(300);
          window.$(this).toggleClass("BreakoutHeaderMobileActive");
              window.$('.BreakoutMobile[data-mobilestage="'+stage+'"] .fa').toggleClass("CaretActive");
                break;
        }
        
  });
    
   
  window.$(".MobileCloseSession").on("click", function() {
        var thisData = window.$(this).data('closetrack');
        var stage = window.$(this).data('mobilestage');
        
            window.$('html, body').animate({
              scrollTop:  window.$('*[data-mobilestage="'+thisData+'"]').offset().top-75
             }, 1000);
        
    window.$(this).parent('.BreakoutCollapsibleMobile[data-mobilecontstage="'+stage+'"]').slideToggle(1000);
    
    window.$('.BreakoutHeaderMobile[data-mobilestage="'+stage+'"]').toggleClass("BreakoutHeaderMobileActive");
    window.$('.BreakoutHeaderMobile[data-mobilestage="'+stage+'"] .fa').toggleClass("CaretActive");
  });
    
});
/* END Navigation Mobile */    

