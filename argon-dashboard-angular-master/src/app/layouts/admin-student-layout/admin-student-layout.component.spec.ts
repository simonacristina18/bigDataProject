import { ComponentFixture, TestBed, waitForAsync } from '@angular/core/testing';

import { AdminStudentLayoutComponent } from './admin-student-layout.component';

describe('AdminStudentLayoutComponent', () => {
  let component: AdminStudentLayoutComponent;
  let fixture: ComponentFixture<AdminStudentLayoutComponent>;

  beforeEach(waitForAsync(() => {
    TestBed.configureTestingModule({
      declarations: [ AdminStudentLayoutComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AdminStudentLayoutComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
