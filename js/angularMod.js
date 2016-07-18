var app = angular.module('myApp',['ui.router']);

app.config([
		'$stateProvider',
		'$urlRouterProvider',
		function($stateProvider, $urlRouterProvider){

			$stateProvider
				.state('home', {
					url: '/home',
					templateUrl: '/home.html',
					controller: 'mainCtrl'
				});
			$urlRouterProvider.otherwise('home');
		}]);

app.config([
		'$stateProvider',
		'$urlRouterProvider',
		function($stateProvider, $urlRouterProvider){

			$stateProvider
				.state('slider', {
					url: '/slider',
					templateUrl: '/slider.html',
					controller: 'sliderCtrl'
				});
		}]);

app.config([
		'$stateProvider',
		'$urlRouterProvider',
		function($stateProvider, $urlRouterProvider){

			$stateProvider
				.state('packs', {
					url: '/packs',
					templateUrl: '/packs.html',
					controller: 'mainCtrl'
				});
		}]);

app.config([
		'$stateProvider',
		'$urlRouterProvider',
		function($stateProvider, $urlRouterProvider){

			$stateProvider
				.state('info', {
					url: '/info',
					templateUrl: '/info.html',
					controller: 'mainCtrl'
				});
		}]);

app.config([
		'$stateProvider',
		'$urlRouterProvider',
		function($stateProvider, $urlRouterProvider){

			$stateProvider
				.state('pictures', {
					url: '/pictures',
					templateUrl: '/pictures.html',
					controller: 'mainCtrl'
				});
		}]);

app.controller('sliderCtrl', ['$scope', function($scope){
	$scope.fxLogo = function(){
		$('.wp1').waypoint(function() {
			$('.wp1').addClass('animated fadeInLeft');
			}, {
				offset: '75%'
		});

		$('#featuresSlider').flickity({
			cellAlign: 'left',
			contain: true,
			prevNextButtons: false
		});

		$('#showcaseSlider').flickity({
			cellAlign: 'left',
			contain: true,
			prevNextButtons: false,
			imagesLoaded: true
		});
	}



}]);

app.controller('navCtrl', ['$scope', function($scope){
	$scope.navToggle = function(){
		$(".nav-toggle").toggleClass("active");
		$(".overlay-boxify").toggleClass("open");
		console.log('clicked navCtrl');
	}
}]);

app.controller('mainCtrl', ['$scope', function($scope){
	$scope.loadPacks = function(){
		$('.wp2').waypoint(function() {
			$('.wp2').addClass('animated fadeInDown');
		}, {
			offset: '75%'
		});
	}
}]);

console.log('angular initiated');