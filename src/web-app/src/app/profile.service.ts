import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Profile } from './profile';

@Injectable({
  providedIn: 'root'
})
export class ProfileService {
  private apiUrl = 'http://localhost:8000/api/myprofile';

  constructor(private http: HttpClient) { }

  getMyProfile(): Observable<Profile> {
    return this.http.get<Profile>(this.apiUrl);
  }
}
