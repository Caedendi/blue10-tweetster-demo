import { Component, OnInit } from '@angular/core';
import { User } from '../../../user';
import { PeopleService } from '../../../people.service';

@Component({
  selector: 'app-api-results',
  templateUrl: './api-results.component.html',
  styleUrls: ['./api-results.component.scss']
})
export class ApiResultsComponent implements OnInit {
  peopleLocal$: User[];

  constructor(
    private peopleService: PeopleService
  ) { }

  ngOnInit() {
    this.getPeople();
  }

  getPeople(): void {
    this.peopleService.getPeopleLocal()
      .subscribe(data => this.peopleLocal$ = data);
  }

}
