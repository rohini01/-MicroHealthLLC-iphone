//
//  LoginscreenViewController.m
//  MicroHealth
//
//  Created by Administrator on 8/6/15.
//  Copyright (c) 2015 Administrator. All rights reserved.
//

#import "LoginscreenViewController.h"
#import <FBSDKLoginKit/FBSDKLoginKit.h>

#import <GoogleOpenSource/GoogleOpenSource.h>
#import <GooglePlus/GooglePlus.h>

@interface LoginscreenViewController ()<UITextFieldDelegate>{
    
    
    IBOutlet UITextField* usernameTextField,*passwordTextField;
    
    IBOutlet UIScrollView *scrollView;
    int intKeyboardHeight;
}
-(IBAction)LoginButtonTapAct:(id)sender;
-(IBAction)registerButtonTapAct:(id)sender;
-(IBAction)forgotPassButtonTapAct:(id)sender;
-(IBAction)facebookLogin:(id)sender;
-(IBAction)twitterLogin:(id)sender;
-(IBAction)googlePlusLogin:(id)sender;
@property (nonatomic, strong) IBOutlet FBSDKLoginButton *loginButton;
@end

@implementation LoginscreenViewController

-(void)viewWillAppear:(BOOL)animated{
   // [[self navigationController] setNavigationBarHidden:YES animated:YES];
    if (self.view.frame.size.height == 736)
    {
        intKeyboardHeight = 226;
    }
    else
    {
        intKeyboardHeight = 216;
    }
}
- (void)viewDidLoad {
    [super viewDidLoad];
    self.loginButton.publishPermissions = @[@"publish_actions"];
    
    if ([[UIDevice currentDevice] userInterfaceIdiom] == UIUserInterfaceIdiomPhone)
    {

    [scrollView setContentSize:CGSizeMake(568,552)];
        
    }
    else{
     [scrollView setContentSize:CGSizeMake(1024,950)];
    }
    
    self.automaticallyAdjustsScrollViewInsets = NO;
    UITapGestureRecognizer *tapToResign = [[UITapGestureRecognizer alloc] initWithTarget:self action:@selector(tapToResign:)];
    [scrollView addGestureRecognizer:tapToResign];
    // Do any additional setup after loading the view from its nib.
}
#pragma mark - IBAction

-(IBAction)forgotPassButtonTapAct:(id)sender{
    forgotPasswordViewController *obj=[[forgotPasswordViewController alloc]initWithNibName:@"forgotPasswordViewController" bundle:nil];
    [self.navigationController pushViewController:obj animated:YES];
    
}
-(IBAction)LoginButtonTapAct:(id)sender{
    thankYouScreenViewController *obj;
    if ([[UIDevice currentDevice] userInterfaceIdiom] == UIUserInterfaceIdiomPhone)
    {
       obj=[[thankYouScreenViewController alloc]initWithNibName:@"thankYouScreenViewController" bundle:nil];
    }
    else{
        obj=[[thankYouScreenViewController alloc]initWithNibName:@"thankYouScreenViewController_ipad" bundle:nil];
    }
    [self.navigationController pushViewController:obj animated:YES];
}
-(IBAction)registerButtonTapAct:(id)sender{
    RegisterViewController *obj;
    if ([[UIDevice currentDevice] userInterfaceIdiom] == UIUserInterfaceIdiomPhone)
    {
      obj=[[RegisterViewController alloc]initWithNibName:@"RegisterViewController" bundle:nil];
    }
    else{
       obj=[[RegisterViewController alloc]initWithNibName:@"RegisterViewController_ipad" bundle:nil];
    }
    //
    [self.navigationController pushViewController:obj animated:YES];
}

-(IBAction)facebookLogin:(id)sender{
    
}
-(IBAction)twitterLogin:(id)sender{
    
}
-(IBAction)googlePlusLogin:(id)sender{
    
}
#pragma mark -Private methods
-(void)tapToResign: (UITapGestureRecognizer *)recognizer
{
    [self.view endEditing:YES];
}
- (void)didReceiveMemoryWarning {
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}
#pragma mark - Textfield Delegates
- (BOOL)textFieldShouldReturn:(UITextField *)textField
{
    [scrollView setContentSize:CGSizeMake(568,552)];
    [textField resignFirstResponder];
    return YES;
}

- (BOOL)textFieldShouldBeginEditing:(UITextField *)textField
{
    [scrollView setContentSize:CGSizeMake(CGRectGetWidth(scrollView.frame),CGRectGetHeight(scrollView.frame) + intKeyboardHeight)];
    
    [scrollView setContentOffset:CGPointMake(0, textField.center.y/3/2) animated:YES];
    
    return YES;
}
-(void)textFieldDidBeginEditing:(UITextField *)textField
{
   
    
    
}

- (void)textFieldDidEndEditing:(UITextField *)textField
{
    
   
    
    
    
    
}

- (BOOL)textFieldShouldClear:(UITextField *)textField{
    return YES;
}

/*
#pragma mark - Navigation

// In a storyboard-based application, you will often want to do a little preparation before navigation
- (void)prepareForSegue:(UIStoryboardSegue *)segue sender:(id)sender {
    // Get the new view controller using [segue destinationViewController].
    // Pass the selected object to the new view controller.
}
*/

@end
