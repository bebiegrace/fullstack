import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ReaderHeadComponent } from './reader-head.component';

describe('ReaderHeadComponent', () => {
  let component: ReaderHeadComponent;
  let fixture: ComponentFixture<ReaderHeadComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ReaderHeadComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ReaderHeadComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
