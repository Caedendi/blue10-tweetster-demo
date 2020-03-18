import { Component, OnInit } from '@angular/core';

declare var $: any;

@Component({
  selector: 'app-splash-slideshow',
  templateUrl: './splash-slideshow.component.html',
  styleUrls: ['./splash-slideshow.component.scss']
})
export class SplashSlideshowComponent implements OnInit {

  constructor() { }

  ngOnInit() {
    this.doSlideShow();
  }

  doSlideShow(): void {
    $('#splash-slideshow').vegas({
      overlay: true,
      transition: 'fade',
      transitionDuration: 4000,
      delay: 10000,
      animation: 'random',
      animationDuration: 20000,
      slides: [
        {src: 'https://i.imgur.com/n3sBim7.png'},
        {src: 'https://i.imgur.com/1bXBg8P.jpg'},
      ]
    });
  }

}
