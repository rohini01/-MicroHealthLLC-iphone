//
//  confirmationSignViewController.m
//  MicroHealth
//
//  Created by Administrator on 8/10/15.
//  Copyright (c) 2015 Administrator. All rights reserved.
//

#import "confirmationSignViewController.h"
#import <AVFoundation/AVFoundation.h>
@interface confirmationSignViewController ()


-(IBAction)nextScreenAction:(id)sender;
@end

@implementation confirmationSignViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    
    [NSTimer scheduledTimerWithTimeInterval:1 target:self selector:@selector(textToSpeechMethod) userInfo:nil repeats:NO];
    // Do any additional setup after loading the view from its nib.
}

- (void)didReceiveMemoryWarning {
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}
#pragma mark - IBAction
-(IBAction)nextScreenAction:(id)sender{
    LoginscreenViewController *obj;
    
    if ([[UIDevice currentDevice] userInterfaceIdiom] == UIUserInterfaceIdiomPhone)
    {
        obj = [[LoginscreenViewController alloc]initWithNibName:@"LoginscreenViewController" bundle:nil];
    }
    else{
        obj = [[LoginscreenViewController alloc]initWithNibName:@"LoginscreenViewController_ipad" bundle:nil];
    }
    [self.navigationController pushViewController:obj animated:YES];
    
    //
}

#pragma mark - PrivateMethod
-(void)textToSpeechMethod{
    AVSpeechSynthesizer *synthesizer = [[AVSpeechSynthesizer alloc]init];
    AVSpeechUtterance *utterance = [AVSpeechUtterance speechUtteranceWithString:@"OK. Please enter your information on the following screen. You will be automatically sent in 3 seconds."];
    [utterance setRate:0.2f];
    [synthesizer speakUtterance:utterance];
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
