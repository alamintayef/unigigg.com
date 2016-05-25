@extends('layouts.app')
@section('content')
  <style media="screen">
  body{
      background: url(http://cleantallahassee.com/wp-content/uploads/2015/09/coming-soon.jpg) no-repeat center center fixed ;

  }
  .box{
    background-color: rgba(0, 0, 0, 0.5);
  }
  


  </style>
<div class="container " style="height:600px;">
  <div class="row">
    <div class="col-md-3 box pad">
      <h2 class="textw foo">We are working on it</h2>
      <h3 class="foo">We'll get there soon</h3>
      <h4 class="foo">Thank you </h4>
    </div>

  </div>
</div>
</script>
<script type="text/javascript">
window.sr = ScrollReveal({ duration: 1500 });
sr.reveal('.foo');

</script>
<script type="text/javascript">
nthDigit = (int, nth) ->
parseInt(int.toString().substr(nth,1))

setAttributes = ->
timeNow = new Date()
# Set hours
hours   = timeNow.getHours()
if hours > 12 then hours -= 12
$('.js-clock[data-dur="hh"]').attr('data-cur', (hours + 1))

minutes = timeNow.getMinutes()

if minutes < 10
  $('.js-clock[data-dur="mm"]').attr('data-cur', 1)
  $('.js-clock[data-dur="m"]').attr('data-cur', (minutes + 1))
else
  $('.js-clock[data-dur="mm"]').attr('data-cur', (nthDigit(minutes, 0) + 1))
  $('.js-clock[data-dur="m"]').attr('data-cur', (nthDigit(minutes, 1) + 1))

seconds = timeNow.getSeconds()

minutes = timeNow.getMinutes()

if seconds < 10
  $('.js-clock[data-dur="ss"]').attr('data-cur', (1))
  $('.js-clock[data-dur="s"]').attr('data-cur', (seconds + 1))
else
  $('.js-clock[data-dur="ss"]').attr('data-cur', (nthDigit(seconds, 0) + 1))
  $('.js-clock[data-dur="s"]').attr('data-cur', (nthDigit(seconds, 1) + 1))

tick = ($el) ->
$active = $el.find('.dial--active')
$active.removeClass('dial--active')
$active.addClass('dial--flipped')
$active.next().removeClass('dial--next').addClass('dial--active')
$active.next().next().addClass('dial--next').removeClass('dial--later')

if $active.next().hasClass 'dial--last'
  setTimeout ( ->
    reset($el)), 300, $el

enableTransitions = ($el) ->
$el.removeClass('transitions-off')

reset = ($el) ->
$el.addClass 'transitions-off'
$el.children().removeClass 'dial--flipped'
$el.children().removeClass 'dial--active'
$el.children().removeClass 'dial--next'
$el.children().first().addClass 'dial--active'
$el.children(':nth-child(2)').addClass 'dial--next'
$el.children(':nth-child(n+3)').addClass 'dial--later'

setTimeout ( ->
  enableTransitions($el)), 300, $el

tick($el)

if $el.attr('data-dur') is 's'
  $(document).trigger('10s')

if $el.attr('data-dur') is 'ss'
  $(document).trigger('60s')

if $el.attr('data-dur') is 'm'
  $(document).trigger('10m')

if $el.attr('data-dur') is 'mm'
  $(document).trigger('60m')

setClasses = ($el) ->
curIndex = parseInt $el.attr('data-cur')
$el.children(':nth-child(' + curIndex + ')').addClass('dial--active')
$el.children(':nth-child(' + (curIndex + 1) + ')').addClass('dial--next')
$el.children(':lt(' + curIndex + ')').addClass('dial--flipped')
$el.children(':gt(' + (curIndex) + ')').addClass('dial--later')
tick($el)

startClock = ->
setInterval( ->
  tick($('.js-clock[data-dur="s"]'))
, 1000)

appendEls = ->
$('.js-clock').each ->
  $el = $(this)
  start = parseInt $(this).attr('data-start')
  end = parseInt $(this).attr('data-end')
  k = start
  while k <= end
    if (k + 1) > end then l = 0 else l = (k + 1)
    $el.append('<div class="dial"><span>' + k + '</span><span>' + l + '</span>')
    k++
  $el.prepend('<div class="dial"><span>0</span><span>0</span></div>')
  $el.append('<div class="dial dial--last"><span>0</span><span>0</span></div>')
  setClasses($el)

attachEvents = ->
$('.js-clock').on 'click', (e) ->
  e.preventDefault()
  $el = $(this)
  $active = $el.find('.dial--active')
  tick($el)

$(document).on '10s', ->
  tick($('.js-clock[data-dur="ss"]'))

$(document).on '60s', ->
  tick($('.js-clock[data-dur="m"]'))

$(document).on '10m', ->
  tick($('.js-clock[data-dur="mm"]'))

 $(document).on '60m', ->
  tick($('.js-clock[data-dur="hh"]'))

$(document).ready ->
setAttributes()
appendEls()
attachEvents()
startClock()


</script>
@include('layouts.footer')
@endsection
