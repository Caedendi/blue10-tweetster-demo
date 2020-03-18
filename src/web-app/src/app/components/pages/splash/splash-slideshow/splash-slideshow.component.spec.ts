import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { SplashSlideshowComponent } from './splash-slideshow.component';

describe('SplashSlideshowComponent', () => {
  let component: SplashSlideshowComponent;
  let fixture: ComponentFixture<SplashSlideshowComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ SplashSlideshowComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(SplashSlideshowComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
