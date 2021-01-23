import { Routes } from '@angular/router';

import { UserProfileComponent } from '../../pages/user-profile/user-profile.component';
import {DashboardStudentComponent} from '../../pages/dashboard-student/dashboard-student.component';

export const AdminStudentLayoutRoutes: Routes = [
    { path: 'dashboard-student', component: DashboardStudentComponent },
    { path: 'user-profile',   component: UserProfileComponent },
];
