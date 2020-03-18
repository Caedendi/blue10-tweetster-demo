import { Component, OnInit } from '@angular/core';
import { Message } from '../../message';
import { MessagesService } from '../../messages.service';

@Component({
  selector: 'app-recents',
  templateUrl: './recents.component.html',
  styleUrls: ['./recents.component.scss']
})
export class RecentsComponent implements OnInit {
  recents$: Message[];

  constructor(private messagesService: MessagesService) {
  }

  ngOnInit() {
    this.getRecentMessages();
  }

  getRecentMessages(): void {
    this.messagesService.getRecentMessages()
      .subscribe(data => this.recents$ = data);
  }

}
