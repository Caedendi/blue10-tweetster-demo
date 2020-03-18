import { Component, OnInit } from '@angular/core';
import { Profile } from '../../../profile';
import { ProfileService } from '../../../profile.service';

@Component({
  selector: 'app-profile',
  templateUrl: './profile.component.html',
  styleUrls: ['./profile.component.scss']
})
export class ProfileComponent implements OnInit {
  myprofile$: Profile;

  constructor(private profileService: ProfileService) { }

  ngOnInit() {
    this.getMyProfile();
  }

  getMyProfile(): void {
    this.profileService.getMyProfile()
      .subscribe(data => this.myprofile$ = data);
  }

}
