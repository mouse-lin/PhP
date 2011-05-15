// 导航 
$(function() {
  $('#navigation a').stop().animate({
    'marginLeft': '-85px'
  },
  1000);

  $('#navigation > li').hover(function() {
    $('a', $(this)).stop().animate({
      'marginLeft': '-2px'
    },
    200);
  },
  function() {
    $('a', $(this)).stop().animate({
      'marginLeft': '-85px'
    },
    200);
  });
});

function loginHandler() { 
    UserVoice.PopIn.show('600px', '300px', "/users/login");
};

function signupHandler() { 
    UserVoice.PopIn.show('600px', '400px', "/users/signup");
}

