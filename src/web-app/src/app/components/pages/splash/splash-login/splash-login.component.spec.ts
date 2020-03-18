import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { SplashLoginComponent } from './splash-login.component';

describe('SplashLoginComponent', () => {
  let component: SplashLoginComponent;
  let fixture: ComponentFixture<SplashLoginComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ SplashLoginComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(SplashLoginComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
