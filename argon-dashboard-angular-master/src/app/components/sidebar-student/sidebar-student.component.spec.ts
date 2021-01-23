import { ComponentFixture, TestBed, waitForAsync } from '@angular/core/testing';

import { SidebarStudentComponent } from './sidebar-student.component';

describe('SidebarStudentComponent', () => {
  let component: SidebarStudentComponent;
  let fixture: ComponentFixture<SidebarStudentComponent>;

  beforeEach(waitForAsync(() => {
    TestBed.configureTestingModule({
      declarations: [ SidebarStudentComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(SidebarStudentComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
