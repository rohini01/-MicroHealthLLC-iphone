//
//  AppDelegate.h
//  MicroHealth
//
//  Created by Administrator on 8/6/15.
//  Copyright (c) 2015 Administrator. All rights reserved.
//

#import <UIKit/UIKit.h>
#import "welcomeScreenViewController.h"
@interface AppDelegate : UIResponder <UIApplicationDelegate>

@property (strong, nonatomic) UIWindow *window;
@property(strong,nonatomic)welcomeScreenViewController *loginView;
@property (strong, nonatomic) UINavigationController *navController;

@end

