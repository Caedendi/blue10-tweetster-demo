import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Message } from './message';

@Injectable({
  providedIn: 'root'
})
export class MessagesService {
  private apiUrl = 'http://localhost:8000/api/recents';

  constructor(private http: HttpClient) { }

  getRecentMessages(): Observable<Message[]> {
    return this.http.get<Message[]>(this.apiUrl);
  }
}
