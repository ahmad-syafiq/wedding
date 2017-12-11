<div class="text-center">

  <div class="mu-schedule-content-area">

    <!-- Tab panes -->
    <div class="tab-content mu-schedule-content">
      <div class="tab-pane fade mu-event-timeline in active" id="first-day">
        <ul style="background-color: rgba(255, 255, 255, 0.7); padding: 45px 20px; width: 75%;margin-left: auto;margin-right: auto;">
          <li>
            <div class="mu-single-event">
              <p class="mu-event-time">9.00 AM</p>
              <h3>Breakfast</h3>
            </div>
          </li>
          <li>
            <div class="mu-single-event">
              <img src="/templates/simple/images/thumb1.jpg" alt="event speaker">
              <p class="mu-event-time">10.00 AM</p>
              <h3>Advanced SVG Animations</h3>
              <span>By Karl Groves</span>
            </div>
          </li>
          <li>
            <div class="mu-single-event">
              <img src="/templates/simple/images/thumb1.jpg" alt="event speaker">
              <p class="mu-event-time">11.00 AM</p>
              <h3>Presenting Work with Confidence</h3>
              <span>By Sarah Dransner</span>
            </div>
          </li>
          <li>
            <div class="mu-single-event">
              <img src="/templates/simple/images/thumb1.jpg" alt="event speaker">
              <p class="mu-event-time">12.00 AM</p>
              <h3>Keynote on UX &amp; UI Design</h3>
              <span>By Ned Stark</span>
            </div>
          </li>
          <li>
            <div class="mu-single-event">
              <p class="mu-event-time">1.00 PM</p>
              <h3>The End</h3>
            </div>
          </li>
        </ul>
      </div>

    </div>

  </div>

</div>

<style type="text/css">
    .mu-event-timeline ul li {
    list-style-type: none;
    position: relative;
    width: 2px;
    margin: 0 auto;
    padding-top: 50px;
    background-color: #770024;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
}



.mu-event-timeline ul li:nth-child(2n+1) .mu-single-event {
    left: -450px;
    text-align: right;
}
.mu-event-timeline ul li .mu-single-event {
    background-color: #fff;
    -webkit-box-shadow: 0 0 16px 0 rgba(32,32,47,0.16);
    -moz-box-shadow: 0 0 16px 0 rgba(32,32,47,0.16);
    box-shadow: 0 0 16px 0 rgba(32,32,47,0.16);
    position: relative;
    top: 0;
    width: 400px;
    padding: 15px;
    text-align: left;
}

.mu-event-timeline ul li:nth-child(2n) .mu-single-event {
    left: 50px;
}
.mu-event-timeline ul li .mu-single-event {
    background-color: #fff;
    -webkit-box-shadow: 0 0 16px 0 rgba(32,32,47,0.16);
    -moz-box-shadow: 0 0 16px 0 rgba(32,32,47,0.16);
    box-shadow: 0 0 16px 0 rgba(32,32,47,0.16);
    position: relative;
    top: 0;
    width: 400px;
    padding: 15px;
    text-align: left;
}

.mu-event-timeline ul li:nth-child(2n+1) .mu-single-event::before {
    right: -15px;
    border-width: 8px 0 8px 16px;
    border-color: transparent transparent transparent #fff;
}
.mu-event-timeline ul li .mu-single-event::before {
    content: '';
    position: absolute;
    top: 23px;
    width: 0;
    height: 0;
    border-style: solid;
}
.mu-event-timeline ul li .mu-single-event h3 {
    margin-bottom: 5px;
    font-size: 16px;
}
.mu-event-timeline ul li::after {
    content: '';
    position: absolute;
    left: 50%;
    top: 70px;
    transform: translateX(-50%);
    height: 24px;
    width: 24px;
    border-radius: 50%;
    background: inherit;
}

.mu-event-timeline ul li:nth-child(2n) .mu-single-event::before {
    left: -16px;
    border-width: 8px 16px 8px 0;
    border-color: transparent #fff transparent transparent;
}
.mu-event-timeline ul li .mu-single-event::before {
    content: '';
    position: absolute;
    top: 23px;
    width: 0;
    height: 0;
    border-style: solid;
}

.mu-event-timeline ul li .mu-single-event img {
    height: 80px;
    width: 80px;
    float: left;
    border-radius: 50%;
    margin-right: 15px;
}

.mu-event-timeline ul li:nth-child(2n+1) .mu-single-event img {
    float: right;
    margin-right: 0;
    margin-left: 15px;
}


  </style>



